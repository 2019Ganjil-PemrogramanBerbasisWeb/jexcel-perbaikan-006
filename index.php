<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>JEXCEL</title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <script>
            $(document).ready(function(){
                $("a").click(function(){
                    var baris = document.querySelectorAll('.jexcel tr');
                    for(var i=1; i < baris.length; i++){
                        var kata = '[';
                        var barisem = baris[i];
                        var kolom = $(barisem).find('td');
                        for(var j=1; j < kolom.length; j++){
                            kata = kata + ' \'' + kolom[j].textContent + '\',';
                        }
                        kata = kata + ']';
                        UpdateRecord(i, kata);
                    }
                });

                function UpdateRecord(baris, kata){
                    jQuery.ajax({url: "update.php?baris="+baris+"&kata="+kata});
                };
            })
        </script>
    </head>
<body>

<div id="app">
  
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
<script src="https://bossanova.uk/jexcel/v3/jexcel.js"></script>
<script src="https://bossanova.uk/jsuites/v2/jsuites.js"></script>

<link href="https://bossanova.uk/jexcel/v3/jexcel.css" rel="stylesheet" />
<link href="https://bossanova.uk/jsuites/v2/jsuites.css" rel="stylesheet" />

<?php 
                $host = "localhost";
                $username = "root";
                $password = "";
                $dbname = "jexcel_web";

                $connectDB = mysqli_connect($host, $username, $password, $dbname);
                $tableData = mysqli_query($connectDB, "SELECT * FROM jexcel ORDER BY baris");
                echo "<script>
                        new Vue({
                            data(){
                            return{
                                table:[],
                                options: {
                                data:[";
                while($row = mysqli_fetch_assoc($tableData)){
                    echo $row['kata'].",";
                }
                echo '],
                colWidths: [ 300, 300, 300, 300, 300],
            }
          }
        },
        mounted: function() {
          let spreadsheet = jexcel(this.$el, this.options);
          this.table = Object.assign(this, spreadsheet);
        },
        methods:{
          
        }
      }).$mount("#app")</script>';
            ?>
  <!-- <script  src="./script.js"></script> -->
    
  <a class="simpan">Simpan</a>
</body>
</html>