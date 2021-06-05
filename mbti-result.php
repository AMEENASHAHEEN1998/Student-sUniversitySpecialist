<?php

include 'inclued/templates/Header.php';
include 'inclued/function/function.php';
include 'connect.php';
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $_SESSION['inlineRadioOptions'][15] = $_POST['inlineRadioOptions'][15];
    $_SESSION['inlineRadioOptions'][16] = $_POST['inlineRadioOptions'][16];
    $_SESSION['inlineRadioOptions'][17] = $_POST['inlineRadioOptions'][17];
    $_SESSION['inlineRadioOptions'][18] = $_POST['inlineRadioOptions'][18];
    $_SESSION['inlineRadioOptions'][19] = $_POST['inlineRadioOptions'][19];

    $inl_0 = $_SESSION['inlineRadioOptions'][0];
    $inl_1 = $_SESSION['inlineRadioOptions'][1];
    $inl_2 = $_SESSION['inlineRadioOptions'][2];
    $inl_3 = $_SESSION['inlineRadioOptions'][3];
    $inl_4 = $_SESSION['inlineRadioOptions'][4];
    $inl_5 = $_SESSION['inlineRadioOptions'][5];
    $inl_6 = $_SESSION['inlineRadioOptions'][6];
    $inl_7 = $_SESSION['inlineRadioOptions'][7];
    $inl_8 = $_SESSION['inlineRadioOptions'][8];
    $inl_9 = $_SESSION['inlineRadioOptions'][9];
    $inl_10 = $_SESSION['inlineRadioOptions'][10];
    $inl_11 = $_SESSION['inlineRadioOptions'][11];
    $inl_12 = $_SESSION['inlineRadioOptions'][12];
    $inl_13 = $_SESSION['inlineRadioOptions'][13];
    $inl_14 = $_SESSION['inlineRadioOptions'][14];
    $inl_15 = $_SESSION['inlineRadioOptions'][15];
    $inl_16 = $_SESSION['inlineRadioOptions'][16];
    $inl_17 = $_SESSION['inlineRadioOptions'][17];
    $inl_18 = $_SESSION['inlineRadioOptions'][18];
    $inl_19 = $_SESSION['inlineRadioOptions'][19];

    $department = $_SESSION['department'];
    $avarage = $_SESSION['avarage'];
    //$specializes=$_POST['specialize'];
    //echo $specializes;

    $array_question = [$inl_0, $inl_1, $inl_2, $inl_3, $inl_4, $inl_5, $inl_6, $inl_7, $inl_8, $inl_9,
        $inl_10, $inl_11, $inl_12, $inl_13, $inl_14, $inl_15, $inl_16, $inl_17, $inl_18, $inl_19];

    // $array_question = [0,0,	0,	1,	1,	0,	1,	1,	1,	0,	0,	1,	1,	1,	1,	0,	1,	0,	1,	0];
    //print_r($array_question);
     getMBTI($inl_0, $inl_1, $inl_2, $inl_3, $inl_4, $inl_5, $inl_6, $inl_7, $inl_8, $inl_9,
        $inl_10, $inl_11, $inl_12, $inl_13, $inl_14, $inl_15, $inl_16, $inl_17, $inl_18, $inl_19);

    $result = getMBTI($inl_0, $inl_1, $inl_2, $inl_3, $inl_4, $inl_5, $inl_6, $inl_7, $inl_8, $inl_9,
        $inl_10, $inl_11, $inl_12, $inl_13, $inl_14, $inl_15, $inl_16, $inl_17, $inl_18, $inl_19);


    $string_question = implode(" ", $array_question);
    // $string_question = ConvertArrayToString($array_question);

    $output = "";
    if ($avarage >= 90 && $department == "الفرع العلمي") {
        $output = shell_exec("python script.py $string_question ");
    } elseif ($avarage >= 85 && $avarage < 90 && $department == "الفرع العلمي") {
        $output = shell_exec("python script90-85S.py $string_question ");
    } elseif ($avarage >= 80 && $avarage < 85 && $department == "الفرع العلمي") {// هندسة
        $output = shell_exec("python script85-80S.py $string_question ");
    } elseif ($avarage >= 70 && $avarage < 80 && $department == "الفرع العلمي") {// تغدية صحية
        $output = shell_exec("python script80-70S.py $string_question ");
    } elseif ($avarage >= 70 && $avarage < 75 && $department == "الفرع العلمي") {//قانون
        $output = shell_exec("python script75-70S.py $string_question ");// تغدية صحية
    } elseif ($avarage >= 50 && $avarage < 65) {
        $output = shell_exec("python script65-50S.py $string_question ");//تخصصات الدبلوم
    } elseif ($avarage >= 65 && $department == "الفرع الأدبي") {
        $output = shell_exec("python script75A.py $string_question ");
    } elseif ($avarage < 50) {
        $output = "The secondary school average is less than the required Please enter a valid rate";
    }


    $name = "";
    for ($i = 0; $i < strlen($output); $i++) {
        // echo $output[$i];
        if ($output[$i] != "'") {
            if ($output[$i] != "]") {
                if ($output[$i] != "[") {

                    $name .= $output[$i];

                }

            }

        }
    }
}
?>
<div class="bg-color">
        <div class="container">

            <div class="row flex-column data text-right align-items-center text-white  ">
                <div class="bg-primer-color w-66 px-5 d-flex j-f">
                    <h1>نوع شخصيتك هو :</h1>
                    <h1 class="text-center"><?php echo getTitle($result);?> <?php echo $result ;?></h1>
                    <div class="mbti-img">
                        <img class="h-100" src="./img/svgexport-4.png">
                    </div>

                </div>
                <div class="bg-primer-color w-66 m-20 px-5 Home-text ">
                    <p ><?php echo getDescription($result);?></p>
                </div>
                <div class="bg-primer-color w-66">
                    <p class="font-bold font">
                      <?php echo colageName($name);?>
                    </p>

                </div>

            </div>
        </div>
    </div>

