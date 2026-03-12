<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <script src="jquery-4.0.0.min.js"></script>
</head>
<body>
    <form action="">
        <div class="form-group">
            <input type="text" placeholder="First Name" name="fname" id="fname">
        </div>
        <div class="form-group">
            <input type="text" placeholder="Last Name" name="lname" id="lname">
        </div>

        <div class="form-group">
            <select name="gender" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <input type="submit" value="submit">
    </form>

    <div id="result"></div>

    <script>
        let form = $('form');
        form.on('submit', function(e){
            e.preventDefault();
            e.stopPropagation();
            
            let fname = $('#fname').val();
            let lname = $('#lname').val();
            let gender = $('#gender').val();

            // AJAX operation
            $.ajax({
                url: 'http://texas805.test/js/ajax_process.php',
                type: 'post',
                data: {
                    fname: fname,
                    lname: lname,
                    gender: gender,
                    action: 'formsubmit'
                },
                success: function(response){
                    let result = $('#result');
                    data = JSON.parse(response);
                    result.html('<p style="color:' + data.color + '">' + data.message + '</p>');
                }
            })
            
        })
    </script>
</body>
</html>