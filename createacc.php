<?php
    // include 'db_connect.php';
    // $img_err="";
    // $img="";
    // if(isset($_POST['submit'])){
    //     $arr=array('png','jpg','jpeg');
    //     $slide_1=$_FILES['slide-1']['name'];
    //     $img=$slide_1;
    //     $slide_1_dir=$_FILES['slide-1']['tmp_name'];
    //     $slide_1_save="images/".$_FILES['slide-1']['name'];
    //     $check_format=explode(".",strtolower($slide_1));
    //     if(!in_array($check_format,$arr)){
    //           $img_err="Only images are allowed"; 
    //     }
    //     }?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <title>Profile</title>
    <link rel="stylesheet" href="css/createacc.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <!-- navbar -->
    <div class="py-3 navbar-div">
        <h2 class="navbar-heading">Zoyo E-Commerce Pvt. Ltd.</h2>
    </div>
    <!-- navbarend -->
    <!-- section start -->
    <section id="sec">
        <div class="container mt-4">
            <div class="contain border p-4">
                <div class="top-heading text-center">
                    <h2>Make Your Profile</h2>
                </div>

                <hr>

                <div class="add-carousel-img text-center my-4">
                    <h4>Add Header Logo</h4>
                </div>
                <form action="save_data.php" method="post" onsubmit="return myfunction();" enctype="multipart/form-data">
                <div class="card">
                    <div class="row">
                        <div class="col-md-12 my-2">
                            <div class="card">
                                <input type="file"  class="form-control array[]" name="header_logo" >
                            </div>
                            <span class="err[]" style="color:red;"></span>
                        </div>
                    </div>
                </div>

                <div class="add-carousel-img text-center my-4">
                    <h4>Add Slider Images</h4>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <input type="file" class="form-control array[]" name="slide_1" id="array[]">
                            </div>
                            <span id="err-1" class="err[]" style="color:red;"></span>
                        </div>
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <input type="file" class="form-control array[]" name="slide_2" id="array[]">
                            </div>
                            <span class="err[]" style="color:red;"></span>
                        </div>
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <input type="file" class="form-control array[]" name="slide_3" id="add-image">
                            </div>
                            <span class="err[]" style="color:red;"></span>
                        </div>
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <input type="file" class="form-control array[]" name="slide_4" id="add-image">
                            </div>
                            <span class="err[]" style="color:red;"></span>
                        </div>
                    </div>
                </div>

                <div class="add-carousel-img text-center my-4">
                    <h4>Add About</h4>
                </div>
                <div class="card-row">
                    <div class="row">
                        <div class="col-md-8 my-2">
                            <div class="card">
                                <textarea name="about" id="" class="form-control" placeholder="Write about yourself"></textarea>
                            </div>
                        </div>

                        <div class="col-md-4 my-2">
                            <div class="card">
                                <input type="file" class="form-control array[]" name="about_img" id="add-image">
                            </div>
                            <span class="err[]" style="color:red;"></span>
                        </div>
                    </div>
                </div>

                <div class="add-carousel-img text-center my-4">
                    <h4>Add Thoughts</h4>
                </div>
                <div class="card-row">
                    <div class="row">
                        <div class="col-md-6 my-2">
                            <div class="card">
                                <textarea name="thought-1" id="" class="form-control" placeholder="Thought 1"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6 my-2">
                            <div class="card">
                                <textarea name="thought-2" id="" class="form-control" placeholder="Thought 2"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 my-2">
                            <div class="card">
                                <textarea name="thought-3" id="" class="form-control" placeholder="Thought 3"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6 my-2">
                            <div class="card">
                                <textarea name="thought-4" id="" class="form-control" placeholder="Thought 4"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 my-2">
                            <div class="card">
                                <textarea name="thought-5" id="" class="form-control" placeholder="Thought 5"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6 my-2">
                            <div class="card">
                                <textarea name="thought-6" id="" class="form-control" placeholder="Thought 6"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="add-carousel-img text-center my-4">
                    <h4>Add Gallery Images</h4>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <input type="file" class="form-control array[]" name="gallery_1" id="add-image">
                            </div>
                            <span class="err[]" style="color:red;"></span>
                        </div>
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <input type="file" class="form-control array[]" name="gallery_2" id="add-image">
                            </div>
                            <span class="err[]" style="color:red;"></span>
                        </div>
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <input type="file" class="form-control array[]" name="gallery_3" id="add-image">
                            </div>
                            <span class="err[]" style="color:red;"></span>
                        </div>
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <input type="file" class="form-control array[]" name="gallery_4" id="add-image">
                            </div>
                            <span class="err[]" style="color:red;"></span>
                        </div>
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <input type="file" class="form-control array[]" name="gallery_5" id="add-image">
                            </div>
                            <span class="err[]" style="color:red;"></span>
                        </div>
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <input type="file" class="form-control array[]" name="gallery_6" id="add-image">
                            </div>
                            <span class="err[]" style="color:red;"></span>
                        </div>
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <input type="file" class="form-control array[]" name="gallery_7" id="add-image">
                            </div>
                            <span class="err[]" style="color:red;"></span>
                        </div>
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <input type="file" class="form-control array[]" name="gallery_8" id="add-image">
                            </div>
                            <span class="err[]" style="color:red;"></span>
                        </div>
                    </div>
                </div>

                <div class="add-carousel-img text-center my-4">
                    <h4>Add Meeting Images</h4>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <input type="file" class="form-control array[]" name="meeting_1" id="add-image">
                            </div>
                            <span class="err[]" style="color:red;"></span>
                        </div>
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <input type="file" class="form-control array[]" name="meeting_2" id="add-image">
                            </div>
                            <span class="err[]" style="color:red;"></span>
                        </div>
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <input type="file" class="form-control array[]" name="meeting_3" id="add-image">
                            </div>
                            <span class="err[]" style="color:red;"></span>
                        </div>
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <input type="file" class="form-control array[]" name="meeting_4" id="add-image">
                            </div>
                            <span class="err[]" style="color:red;"></span>
                        </div>
                    </div>
                </div>

                <div class="add-carousel-img text-center my-4">
                    <h4>Add Supporter Images</h4>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <input type="text" class="form-control" name="supporter-1" id="supportername"
                                    placeholder="Supporter Name">
                            </div>
                        </div>
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <input type="file" class="form-control array[]" name="supporter_1_img" id="add-image">
                            </div>
                        </div>
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <input type="text" class="form-control" name="supporter-2" id="supportername"
                                    placeholder="Supporter Name">
                            </div>
                        </div>
                        <div class="col-md-3 my-2">
                            <div class="card">
                                <input type="file" class="form-control array[]" name="supporter_2_img" id="add-image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="add-carousel-img text-center my-4">
                    <h4>Add Address</h4>
                </div>
                <div class="card-row">
                    <div class="row">
                        <div class="col-md-12 my-2">
                            <div class="card">
                                <textarea name="address" id="" class="form-control" placeholder="Write your address"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="add-carousel-img text-center my-4">
                    <h4>Add Profile Links</h4>
                </div>
                <div class="card-row">
                    <div class="row">
                        <div class="col-md-6 my-2">
                            <div class="card">
                                <input type="text" class="form-control" name="link-1" id="facebook_url"
                                    placeholder="Facebook">
                            </div>
                            <span id="fb_err" style="color:red;"></span>
                        </div>
                        <div class="col-md-6 my-2">
                            <div class="card">
                                <input type="text" class="form-control" name="link-2" id="twitter_url"
                                    placeholder="Twitter">
                            </div>
                            <span id="tweet_err" style="color:red;"></span>
                        </div>
                    </div>
                </div>
                <div id="err_form" class="text-center pt-3" style="color:red"></div>
                <div class="row justify-content-center text-center mt-4">
                    <div class="col-md-3 my-2">
                        <div class="card-row sbmt-button">
                            <button type="submit" name="submit" class="btn btn-primary py-2">Create Your Profile</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </section>
    <!-- section end -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script>
        function myfunction(){
        var er=0; 
        var arr=['jpg','png','jpeg','mpeg','jfif'];
        var img=document.getElementsByClassName('array[]');
        console.log(img);
        console.log(img.length);
        var show_err=document.getElementsByClassName('err[]');
       
        for (var i = 0; i < img.length; i++) {
                var a = img[i].value;
                if(a!=""){
                let arr1=a.split(".");
                if(arr.includes(arr1[1])){
                console.log("true");
        }
        else{
            show_err[i].innerHTML="Only images are allowed";
            er++;
        }
    }
            }
            var url=document.getElementById('facebook_url').value;
            var url1=document.getElementById('twitter_url').value;
            var pattern = /^(https?:\/\/)?((w{3}\.)?)facebook.com\/.*/;
            if(url!=''){
            if(!pattern.test(url)) {
              er++;
              document.getElementById('fb_err').innerHTML="Insert your facebook link here";
            }
        }
            var pattern_twitter=/(?:http:\/\/)?(?:www\.)?twitter\.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[\w\-]*\/)*([\w\-]*)/;
            if(url1!=''){
            if(!pattern_twitter.test(url1)){
                er++;
              document.getElementById('tweet_err').innerHTML="Insert your twitter link here"; 
            }
        }
            if(er==0){
            return true;
            }
            else{
                document.getElementById('err_form').innerHTML="First select correct images or link";
                return false;
            }
        }
    </script>    
</body>

</html>