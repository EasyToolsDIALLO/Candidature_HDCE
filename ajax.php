
<script>

        $(document).ready(function(){
            displayData();
           
        });
   

        function displayData(){
            var display_data = "true";
            $.ajax({
                url:"views/display.php",
                type:'post',
                data:{
                    displaySend: display_data
                },
                success:function(data,status){
                    //function to display data
                    $('#mytbody_data').html(data)
                }
            })
                // Update data every 5 seconds (for example)
                //setInterval(displayData, 5000);
        }

        
        function addUser(){
            var nameAdd=$('#nom').val();
            var prenomAdd=$('#prenom').val();
            var categorieAdd=$( "#formulaire_select option:selected" ).text();
            
            $.ajax({
                url:"views/insert.php",
                type:'post',
                data:{
                    name:nameAdd,
                    prenoms:prenomAdd,
                    categories:categorieAdd
                },
                success:function(data,status){
                    //function to display data
                    console.log(status);
                    displayData();
                    $('#myModal').css('display', 'none');
                    
                }
            })
        }

        function close(){
            var modal = document.getElementById("myModal");
            $('#annuler_user').on("click",function(){
                modal.style.display = "none";
                $('#myModal').css('display', 'none');
            })
        }

        function closeUpdate(){
            var modal = document.getElementById("myUpdateModal");
            $('#ann_user').on("click",function(){
                modal.style.display = "none";
                $('#myUpdateModal').css('display', 'none');
            })
        }

        function getDetails(updateId){
            console.log("C'est passé, ",updateId);
            $('#hiddendata').val(updateId);
            $.post('views/update.php',{updateId:updateId},function(data,status){
                var userid=JSON.parse(data);
                $('#updatenom').val(userid.nom);
                $('#updateprenom').val(userid.prenom);
                $('#updatecategorie').val(userid.categorie_id);
            });

            $('#myUpdateModal').css('z-index', '20');
            $('#myUpdateModal').css('display', 'block');
        }

        function updateDetails(){
            var updatenom = $('#updatenom').val();
            var updateprenom = $('#updateprenom').val();
            var updatecategorie = $( "#update_select option:selected" ).text();

            var hiddendata =$('#hiddendata').val()
            $.post("views/update.php",{
                updatenom:updatenom,
                updateprenom:updateprenom,
                updatecategorie:updatecategorie,
                hiddendata:hiddendata,
            },function(data,status){
                
                displayData();
                $('#myUpdateModal').css('display', 'none');
            })
        }
    
</script>