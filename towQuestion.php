<?php
session_start();
include 'inclued/templates/Header.php';
include 'connect.php';
include 'inclued/function/function.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['department'] = $_POST['department'];
    $_SESSION['avarage'] = $_POST['avarage'];
    if($_SESSION['avarage'] < 50 || $_SESSION['avarage'] > 100){
        echo "المعدل المدخل غير مرغوب فيه يرجى ادخال معدل ثانوية صحيح";
        header('location:towQuestion.php');
    }else{
        header('location:questions.php');
    }
    exit();
}
?>
<div class="bg-tow text-center">
        <div class="container">
            <div class="row  text-right align-items-center justify-content-center vh-100">
                <div class="bg-black-color color">
                    <p style="font-size: 25px;" class="text-center">استخدم هذه الطريقة لحصول على التخصصات<br>
                        المناسبة بناءً على الفرع، والمعدل</p>
                <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="form-group">

                        <select class="custom-select rounded-pill text-dark d-R" id="exampleInputEmail1" name="department"  required>
                            <option value="" disabled selected>--إختر الفرع--</option>
                            <option value="الفرع العلمي"> الفرع العلمي</option>
                            <option value="الفرع الأدبي"> الفرع الأدبي</option>
                            <option value="الفرع الزراعي">الفرع الزراعي </option>
                            <option value="الفرع الشرعي">الفرع الشرعي</option>
                            <option value="الفرع الريادي والاعمال">الفرع الريادي والاعمال</option>

                        </select>


                    </div>
                    <div class="form-group">

                        <input type="number" min="50"
                               oninput="this.value =!!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null"
                               max="100" name="avarage" class="d-R form-control rounded-pill text-dark" id="exampleInputPassword1"
                               placeholder="ادخل المعدل" >
                    </div>
                    <div class="text-center">
                        <button type="submit" class=" btn-background btn btn-primary rounded-pill px-5 mt-3">ارسل</button>

                    </div>



                </form>
                </div>

            </div>
        </div>
</div>


<?php
include 'inclued/templates/Footer.php'
?>
