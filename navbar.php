<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="background_styles.css">
    <link rel="stylesheet" href="style.css">

    <title>Responsive Navbar</title>


    <!-- <link rel="stylesheet" href="timeline.css"> -->



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>
    <nav class="navbar">
        <div class="brand-title">Brand Name</div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>


    <div class="container">


        <form action="action.php" method="POST">
            <div class="row">
                <div class="col-md-8">
                    <label for="name"> Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
            </div>
            <br>
            <textarea name="article-content" class="content" id="text-editor"></textarea>
            <br>
            <input type="submit" class="btn btn-primary" name="submit">

        </form>



    </div>



    <script src="ckeditor/ckeditor.js"></script>
</body>

</html>

<script>
const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active')
})

CKEDITOR.replace('text-editor');


// $(document).ready(function() {


//   console.log(get_text);


//     $("input[name='article-content']").keyup(function() {

//         var get_text = $("text-editor").val();


//         alert(get_text);


//     });




// });
</script>