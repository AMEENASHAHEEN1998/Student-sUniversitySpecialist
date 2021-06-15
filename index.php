<?php
session_start();
include 'inclued/templates/Header.php';
include 'connect.php';
include 'inclued/function/function.php';

?>
<div class="Home-bg">

    <div class="container ">
        <div class="d-flex vh-100 align-items-center justify-content-center">
            <div class="row data text-right ">
                <div class="col-lg-6 ">
                    <div class="d-flex justify-content-end ">
                        <img src="./img/Group 100.png" class="img-fluid">
                    </div>

                </div>
                <div class="col-lg-6 m-xl-0 mt-md-5 mt-5">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <h1 class="text-center header-title font-weight-bold primer-color">
                            ISUS<br>
                            إيسوس

                        </h1>
                        <p class="mt-5 Home-text">
                            برنامج يساعدك على اختبار الأمثل لتخصصك
                            الجامعي ، إعتمادا على خوارزميات الذكاء
                            الاصطناعي ونمط الشخصية
                            <a class="pr-1 pl-1"
                               href="https://en.wikipedia.org/wiki/Myers%E2%80%93Briggs_Type_Indicator"
                               target="_blank">(MBTI)</a>
                        </p>
                        <small class="h6 text-danger ">
                            <em> احرص على ان تكون إجاباتك دقيقة لتحصل على أفضل
                                النتائج</small>
                        </em>
                        <a href="towQuestion.php" class="btn btn-light rounded-pill px-5 mt-5 ">إبدأ </a>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>

<?php
include 'inclued/templates/Footer.php'
?>
