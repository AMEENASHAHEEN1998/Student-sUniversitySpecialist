<?php
session_start();
include 'inclued/templates/Header.php';
include 'connect.php';
include 'inclued/function/function.php';
//

$do = isset($_GET['do']) ? $do = $_GET['do'] : $do = 1;
?>
    <div class="bg-color">
        <div class="container">
            <div class="row data text-center">
                <?php if ($do == 1) { ?>
                    <form action="questions.php?do=2" method="POST" id="regForm" class="col-12">



                    <!-- Circles which indicates the steps of the form: -->
                    <div class="steps" style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>


                    <div class="tab">
                    <?php
                    $stm = $con->prepare("SELECT * FROM questions limit 5 offset 0 ");
                    $stm->execute();
                    $rows = $stm->fetchALL();
                    // print_r($rows[1]);


                    foreach ($rows as $row) {
                        $i = intval($row['Q_ID']) - 1;

                        // echo intval($row['Q_ID']);
                        // echo "<br>";
                        // echo "inlineRadioOptions['.$i.']";

                        // echo $x;



                        ?>

                        <div class="check-stat row">
                            <div class="col-6"><?php echo $row['question']; ?></div>
                            <div class="col-6">
                                <div class="row">
                                    <label class="col-4">
                                        <input type="radio" name="<?php echo 'inlineRadioOptions[' . $i . ']'; ?>" value="<?php echo $row['true_answer']; ?>" required >
                                        نعم
                                    </label>
                                    <label class="col-4">
                                        <input type="radio" name="<?php echo 'inlineRadioOptions[' . $i . ']'; ?>" value="<?php echo $row['false_answer']; ?>" >
                                        لا
                                    </label>



                                </div>
                            </div>
                        </div>

                        <?php

                    }
                    ?>



                    </div>



                    <div class="text-center" style="margin-top:40px">
                        <input type="submit" id="nextBtn" class="btn btn-info btn-lg" onclick="nextPrev(1) " value="التالي">

                    </div>
                </form>


            <?php } elseif ($do == 2) {
                $_SESSION['inlineRadioOptions'][0] = $_POST['inlineRadioOptions'][0];
                $_SESSION['inlineRadioOptions'][1] = $_POST['inlineRadioOptions'][1];
                $_SESSION['inlineRadioOptions'][2] = $_POST['inlineRadioOptions'][2];
                $_SESSION['inlineRadioOptions'][3] = $_POST['inlineRadioOptions'][3];
                $_SESSION['inlineRadioOptions'][4] = $_POST['inlineRadioOptions'][4];
            ?>
            <form action="questions.php?do=3" method="POST" id="regForm" class="col-12">



                    <!-- Circles which indicates the steps of the form: -->
                    <div class="steps" style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>


                    <div class="tab">
                    <?php
                    $stm = $con->prepare("SELECT * FROM questions limit 5 offset 5 ");
                    $stm->execute();
                    $rows = $stm->fetchALL();
                    // print_r($rows[1]);


                    foreach ($rows as $row) {
                        $i = intval($row['Q_ID']) - 1;

                        // echo intval($row['Q_ID']);
                        // echo "<br>";
                        // echo "inlineRadioOptions['.$i.']";

                        // echo $x;



                        ?>

                        <div class="check-stat row">
                            <div class="col-6"><?php echo $row['question']; ?></div>
                            <div class="col-6">
                                <div class="row">
                                    <label class="col-4">نعم <input type="radio" name="<?php echo 'inlineRadioOptions[' . $i . ']'; ?>" value="<?php echo $row['true_answer']; ?>" required>
                                    </label>
                                    <label class="col-4">لا <input type="radio" name="<?php echo 'inlineRadioOptions[' . $i . ']'; ?>" value="<?php echo $row['false_answer']; ?>" >
                                    </label>

                                </div>
                            </div>
                        </div>

                        <?php

                    }
                    ?>



                    </div>



                    <div class="text-center" style="margin-top:40px">
                        <input type="submit" id="nextBtn" class="btn btn-info btn-lg" onclick="nextPrev(1) " value="التالي">

                    </div>
                </form>
            <?php } elseif ($do == 3) {
                $_SESSION['inlineRadioOptions'][5] = $_POST['inlineRadioOptions'][5];
                $_SESSION['inlineRadioOptions'][6] = $_POST['inlineRadioOptions'][6];
                $_SESSION['inlineRadioOptions'][7] = $_POST['inlineRadioOptions'][7];
                $_SESSION['inlineRadioOptions'][8] = $_POST['inlineRadioOptions'][8];
                $_SESSION['inlineRadioOptions'][9] = $_POST['inlineRadioOptions'][9];
            ?>
            <form action="questions.php?do=4" method="POST" id="regForm" class="col-12">



        <!-- Circles which indicates the steps of the form: -->
        <div class="steps" style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>


        <div class="tab">
            <?php
            $stm = $con->prepare("SELECT * FROM questions limit 5 offset 10 ");
            $stm->execute();
            $rows = $stm->fetchALL();
            // print_r($rows[1]);


            foreach ($rows as $row) {
                $i = intval($row['Q_ID']) - 1;

                // echo intval($row['Q_ID']);
                // echo "<br>";
                // echo "inlineRadioOptions['.$i.']";

                // echo $x;



                ?>

                <div class="check-stat row">
                    <div class="col-6"><?php echo $row['question']; ?></div>
                    <div class="col-6">
                        <div class="row">
                            <label class="col-4">نعم <input type="radio" name="<?php echo 'inlineRadioOptions[' . $i . ']'; ?>" value="<?php echo $row['true_answer']; ?>" required>
                            </label>
                            <label class="col-4">لا <input type="radio" name="<?php echo 'inlineRadioOptions[' . $i . ']'; ?>" value="<?php echo $row['false_answer']; ?>" >
                            </label>

                        </div>
                    </div>
                </div>

                <?php

            }
            ?>



        </div>



        <div class="text-center" style="margin-top:40px">
            <input type="submit" id="nextBtn" class="btn btn-info btn-lg" onclick="nextPrev(1) " value="التالي">

        </div>
    </form>?>
            <?php } elseif ($do == 4) {
                $_SESSION['inlineRadioOptions'][10] = $_POST['inlineRadioOptions'][10];
                $_SESSION['inlineRadioOptions'][11] = $_POST['inlineRadioOptions'][11];
                $_SESSION['inlineRadioOptions'][12] = $_POST['inlineRadioOptions'][12];
                $_SESSION['inlineRadioOptions'][13] = $_POST['inlineRadioOptions'][13];
                $_SESSION['inlineRadioOptions'][14] = $_POST['inlineRadioOptions'][14];

                ?>
            <form action="mbti-result.php" method="POST" id="regForm" class="col-12">



        <!-- Circles which indicates the steps of the form: -->
        <div class="steps" style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>


        <div class="tab">
            <?php
            $stm = $con->prepare("SELECT * FROM questions limit 5 offset 15 ");
            $stm->execute();
            $rows = $stm->fetchALL();
            // print_r($rows[1]);


            foreach ($rows as $row) {
                $i = intval($row['Q_ID']) - 1;

                // echo intval($row['Q_ID']);
                // echo "<br>";
                // echo "inlineRadioOptions['.$i.']";

                // echo $x;



                ?>

                <div class="check-stat row">
                    <div class="col-6"><?php echo $row['question']; ?></div>
                    <div class="col-6">
                        <div class="row">
                            <label class="col-4">نعم <input type="radio" name="<?php echo 'inlineRadioOptions[' . $i . ']'; ?>" value="<?php echo $row['true_answer']; ?>" required>
                            </label>
                            <label class="col-4">لا <input type="radio" name="<?php echo 'inlineRadioOptions[' . $i . ']'; ?>" value="<?php echo $row['false_answer']; ?>" >
                            </label>

                        </div>
                    </div>
                </div>

                <?php

            }
            ?>



        </div>



        <div class="text-center" style="margin-top:40px">
            <input type="submit" id="nextBtn" class="btn btn-info btn-lg" onclick="nextPrev(1) " value="التالي">

        </div>
    </form>

                <?php  } ?>
            </div>
        </div>
    </div>

<?php
            include 'inclued/templates/Footer.php'
            ?>