<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div>
        <label>Search bar</label>
        <input type="search" name="search_text" placeholder="searchbar" id="search_text">
    </div>

<script>

        $(document).ready(function(){
            $('#search_text').keyup(function(){
                var txt=$(this).val();
                if(txt !='')
                {
                    $.ajax({
                        url:'fetch.php',
                        type:'POST',
                        data:{search:text},
                        datatype:"text",
                        success: function(data){
                            $('#result').html(' ');
                        }
                    
                    
                    })
                }
            })
        })


    </script>

</body>
</html>