<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Job Application System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <?php include 'navbar.php'; ?>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }

        #signUpForm {
            max-width: 1200px;
            background-color: #ffffff;
            margin: 40px auto;
            padding: 40px;
            box-shadow: 0px 6px 18px rgb(0 0 0 / 9%);
            border-radius: 12px;
        }

        #signUpForm .form-header {
            gap: 5px;
            text-align: center;
            font-size: .9em;
        }

        #signUpForm .form-header .stepIndicator {
            position: relative;
            flex: 1;
            padding-bottom: 30px;
        }

        #signUpForm .form-header .stepIndicator.active {
            font-weight: 600;
        }

        #signUpForm .form-header .stepIndicator.finish {
            font-weight: 600;
            color: #660096;
        }

        #signUpForm .form-header .stepIndicator::before {
            color: #660096;
            content: "";
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            z-index: 9;
            width: 20px;
            height: 20px;
            background-color: #e1d5ef;
            border-radius: 50%;
            border: 3px solid #f0ecf5;
        }

        #signUpForm .form-header .stepIndicator.active::before {
            background-color: #e1d5ef;
            border: 3px solid #f0ecf5;
        }

        #signUpForm .form-header .stepIndicator.finish::before {
            background-color: #660096;
            border: 3px solid #cab7e1;
        }

        #signUpForm .form-header .stepIndicator::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 8px;
            width: 100%;
            height: 3px;
            background-color: #f3f3f3;
        }

        #signUpForm .form-header .stepIndicator.active::after {
            background-color: #cfa7ed;
        }

        #signUpForm .form-header .stepIndicator.finish::after {
            background-color: #4B2399;
        }

        #signUpForm .form-header .stepIndicator:last-child:after {
            display: none;
        }

        .stepIndicator {
            font-size: 11px;
        }

        #signUpForm input {
            padding: 15px 20px;
            width: 100%;
            font-size: 1em;
            border: 1px solid #e3e3e3;
            border-radius: 5px;
        }

        #signUpForm input:focus {
            border: 1px solid #4B2399;
            outline: 0;
        }

        #signUpForm input.invalid {
            border: 1px solid #ffaba5;
        }

        #signUpForm .step {
            display: none;
        }

        #signUpForm .form-footer {
            overflow: auto;
            gap: 20px;
        }

        #signUpForm .form-footer button {
            background-color: #734fbc;
            border: 1px solid #4B2399 !important;
            color: #ffffff;
            border: none;
            padding: 13px 30px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
            flex: 1;
            margin-top: 5px;
        }

        #signUpForm .form-footer button:hover {
            opacity: 0.8;
        }

        #signUpForm .form-footer #prevBtn {
            background-color: #fff;
            color: #4B2399;
        }
    </style>
</head>

<body>
    <div id="content">
        <h2 class="text-center ">แบบฟอร์มสมัครงาน</h2>
        <form id="signUpForm" action="#!">
            <!-- start step indicators -->
            <div class="form-header d-flex mb-4">
                <span class="stepIndicator">Step 1</span>
                <span class="stepIndicator">Step 2</span>
                <span class="stepIndicator">Step 3</span>
                <span class="stepIndicator">Step 4</span>
                <span class="stepIndicator">Step 5</span>
                <span class="stepIndicator">Step 6</span>
                <span class="stepIndicator">Step 7</span>
                <span class="stepIndicator">Step 8</span>
                <span class="stepIndicator">Step 9</span>
            </div>
            <!-- end step indicators -->

            <!-- step one --------------------------------------------------- -->
            <div class="step">
                <p class="text-center mb-4">เลขประจำตัวบัตรประชาชน</p>
                <div class="row">
                    <div class="mb-3 form-group">
                        <label for="id_card">เลขรหัสบัตรประชาชน:</label><br>
                        <input class="form-control" type="text" placeholder="X-XXXX-XXXXX-XX-X" id="id_card" name="id_card" maxlength="13" required><br>
                        <!-- <input type="email" placeholder="เลขประจำตัวบัตรประชาชน" oninput="this.className = ''" name="email"> -->
                    </div>
                </div>
            </div>

            <!-- step two --------------------------------------------------- -->
            <div class="step">
                <div class="row">
                    <p class="text-center mb-4">ข้อมูลส่วนตัว</p>
                </div>
                <div class="row">
                    <div class="mb-4 col-md-4 form-group">
                        <label for="prefix">คำนำหน้าชื่อ</label>
                        <select id="prefix" class="form-control">
                            <option selected>กรุณาเลือก...</option>
                            <option>ด.ช.</option>
                            <option>ด.ญ.</option>
                            <option>นาย</option>
                            <option>นางสาว</option>
                            <option>นาง</option>
                        </select>
                    </div>
                    <div class="mb-4 col-md-4 form-group">
                        <label for="gender">เพศ</label>
                        <select id="gender" class="form-control">
                            <option selected>กรุณาเลือก...</option>
                            <option>ชาย</option>
                            <option>หญิง</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="mb-3 col-md-4 form-group">
                        <label for="fname_th">ชื่อภาษาไทย</label>
                        <input class="form-control" type="text" id="fname_th" name="fname_th" required>
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="cname_th">ชื่อกลางภาษาไทย</label>
                        <input class="form-control" type="text" id="cname_th" name="cname_th">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="lname_th">นามสกุลภาษาไทย</label>
                        <input class="form-control" type="text" id="lname_th" name="lname_th" required>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-4 form-group">
                        <label for="fname_en">ชื่อภาษาอังกฤษ</label>
                        <input class="form-control" type="text" id="fname_en" name="fname_en">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="cname_en">ชื่อกลางภาษาอังกฤษ</label>
                        <input class="form-control" type="text" id="cname_en" name="cname_en">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="lname_en">นามสกุลภาษาอังกฤษ</label>
                        <input class="form-control" type="text" id="lname_en" name="lname_en">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="mb-3 col-md-4 form-group">
                        <label for="position">ตำแหน่งงาน</label>
                        <input class="form-control" type="text" id="position" name="position" required>
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="salary">เงินเดือนที่หวัง</label>
                        <input class="form-control" type="text" id="salary" name="salary">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="tel">เบอร์ติดต่อ</label>
                        <input class="form-control" type="text" id="tel" name="tel" required>
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="email">อีเมล</label>
                        <input class="form-control" type="email" id="email" name="email" required>
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="dob">วัน/เดือน/ปีเกิด</label>
                        <input class="form-control" type="date" id="dob" name="dob" required>
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="age">อายุ</label>
                        <input class="form-control" type="text" id="age" name="age">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="mb-3 col-md-4 form-group">
                        <label for="address">บ้านเลขที่</label>
                        <input class="form-control" type="text" id="address" name="address">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="moo">หมู่ที่</label>
                        <input class="form-control" type="text" id="moo" name="moo">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="alley">ซอย</label>
                        <input class="form-control" type="text" id="alley" name="alley">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="road">ถนน</label>
                        <input class="form-control" type="text" id="road" name="road">
                    </div>
                    <div class="mb-4 col-md-4 form-group">
                        <label for="province">จังหวัด</label>
                        <select id="province" class="form-control">
                            <option selected>กรุณาเลือก...</option>
                            <option>ปัตตานี</option>
                            <option>ยะลา</option>
                            <option>นราธิวาส</option>
                            <option>สงขลา</option>
                            <option>สตูล</option>
                        </select>
                    </div>
                    <div class="mb-4 col-md-4 form-group">
                        <label for="district">อำเภอ</label>
                        <select id="district" class="form-control">
                            <option selected>กรุณาเลือก...</option>
                            <option>เมืองยะลา</option>
                            <option>รามัน</option>
                            <option>ยะหา</option>
                            <option>บันนังสตา</option>
                            <option>ธารโต</option>
                            <option>เบตง</option>
                            <option>กาบัง</option>
                            <option>กรงปินัง</option>
                        </select>
                    </div>
                    <div class="mb-4 col-md-4 form-group">
                        <label for="subdistrict">ตำบล</label>
                        <select id="subdistrict" class="form-control">
                            <option selected>กรุณาเลือก...</option>
                            <option>บันนังสตา</option>
                            <option>ตาเนาะปูเตะ</option>
                            <option>ตลิ่งชัน</option>
                            <option>เขื่อนบางลาง</option>
                            <option>บาเจาะ</option>
                            <option>ถ้ำทะลุ</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="postcode">รหัสไปรษณีย์</label>
                        <input class="form-control" type="text" id="postcode" name="postcode">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="mb-3 col-md-4 form-group">
                        <label for="nationality">สัญชาติ</label>
                        <input class="form-control" type="text" id="nationality" name="nationality">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="race">เชื้อชาติ</label>
                        <input class="form-control" type="text" id="race" name="race">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="rlg">ศาสนา</label>
                        <input class="form-control" type="text" id="rlg" name="rlg">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="hg">ส่วนสูง</label>
                        <input class="form-control" type="text" id="hg" name="hg">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="wg">น้ำหนัก</label>
                        <input class="form-control" type="text" id="wg" name="wg">
                    </div>
                    <div class="mb-4 col-md-4 form-group">
                        <label for="blood">กรุ๊ปเลือด</label>
                        <select id="blood" class="form-control">
                            <option selected>กรุณาเลือก...</option>
                            <option>เอ/A</option>
                            <option>บี/B</option>
                            <option>โอ/O</option>
                            <option>เอบี/AB</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-4 col-md-4 form-group">
                        <label for="marital_status">สถานภาพ</label>
                        <select id="marital_status" class="form-control">
                            <option selected>กรุณาเลือก...</option>
                            <option>โสด</option>
                            <option>สมรส</option>
                            <option>หม้าย</option>
                            <option>แยกกัน</option>
                        </select>
                    </div>
                    <div class="mb-4 col-md-4 form-group">
                        <label for="military_status">สถานะทางทหาร</label>
                        <select id="military_status" class="form-control">
                            <option selected>กรุณาเลือก...</option>
                            <option>ได้รับหารยกเว้น</option>
                            <option>ปลดเป็นทหารกองหนุน</option>
                            <option>ยังไม่ได้รับการเกณฑ์</option>
                        </select>
                    </div>
                    <div class="mb-4 col-md-4 form-group">
                        <label for="living_status">สถานะที่พัก</label>
                        <select id="living_status" class="form-control">
                            <option selected>กรุณาเลือก...</option>
                            <option>อาศัยกับครอบครัว</option>
                            <option>บ้านตัวเอง</option>
                            <option>บ้านเช่า</option>
                            <option>หอพัก</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="mb-3 col-md-4 form-group">
                        <label for="maried_name">ชื่อ-สกุล คู่สมรส</label>
                        <input class="form-control" type="text" id="maried_name" name="maried_name">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="maried_job">อาชีพ</label>
                        <input class="form-control" type="text" id="maried_job" name="maried_job">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="maried_place">สถานที่ทำงาน</label>
                        <input class="form-control" type="text" id="maried_place" name="maried_place">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="child">จำนวนบุตร</label>
                        <input class="form-control" type="number" id="child" name="child">
                    </div>
                </div>
                <br>

            </div>

            <!-- step three --------------------------------------------------- -->
            <div class="step">
                <p class="text-center mb-4">ข้อมูลครอบครัว</p>
                <div class="row">
                    <div class="mb-3 col-md-4 form-group">
                        <label for="dad_name">ชื่อ-สกุลบิดา</label>
                        <input class="form-control" type="text" id="dad_name" name="dad_name" required>
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="dad_age">อายุ</label>
                        <input class="form-control" type="text" id="dad_age" name="dad_age">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="dad_job">อาชีพ</label>
                        <input class="form-control" type="text" id="dad_job" name="dad_job" required>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-4 form-group">
                        <label for="mom_name">ชื่อ-สกุลมารดา</label>
                        <input class="form-control" type="text" id="mom_name" name="mom_name">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="mom_age">อายุ</label>
                        <input class="form-control" type="text" id="mom_age" name="mom_age">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="mom_job">อาชีพ</label>
                        <input class="form-control" type="text" id="mom_job" name="mom_job">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="mb-3 col-md-4 form-group">
                        <label for="num_of_fam">จำนวนสมาชิกพี่น้อง(รวมผู้สมัคร)</label>
                        <input class="form-control" type="number" id="num_of_fam" name="num_of_fam">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="num_bro">จำนวนพี่น้องชาย</label>
                        <input class="form-control" type="number" id="num_bro" name="num_bro">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="num_sis">จำนวนพี่น้องหญิง</label>
                        <input class="form-control" type="number" id="num_sis" name="num_sis">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="child_of_fam">ผู้สมัครเป็นบุตรคนที่</label>
                        <input class="form-control" type="number" id="child_of_fam" name="child_of_fam">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="mb-3 col-md-4 form-group">
                        <label for="fam_name">ชื่อ-สกุล</label>
                        <input class="form-control" type="text" id="fam_name" name="fam_name">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="fam_age">อายุ</label>
                        <input class="form-control" type="text" id="fam_age" name="fam_age">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="fam_job">อาชีพ</label>
                        <input class="form-control" type="text" id="fam_job" name="fam_job">
                    </div>
                </div>
                <br>
            </div>

            <!-- step four --------------------------------------------------- -->
            <div class="step">
                <p class="text-center mb-4">ข้อมูลการศึกษา</p>
                <div class="row">
                    <div class="mb-4 col-md-4 form-group">
                        <label for="edu_level">ระดับการศึกษา</label>
                        <select id="edu_level" class="form-control">
                            <option selected>กรุณาเลือก...</option>
                            <option>มัธยมศึกษาตอนปลาย</option>
                            <option>ปวช.</option>
                            <option>ปวท./ปวส.</option>
                            <option>ปริญญาตรี</option>
                            <option>ปริญญาโท</option>
                            <option>ปริญญาเอก</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="edu_school">สถานศึกษา</label>
                        <input class="form-control" type="text" id="fam_age" name="fam_age">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="edu_major">สาขา</label>
                        <input class="form-control" type="text" id="fam_job" name="fam_job">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="edu_begin">ปีที่เริ่มเรียน</label>
                        <input class="form-control" type="text" id="fam_name" name="fam_name">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="edu_end">ปีที่จบ</label>
                        <input class="form-control" type="text" id="fam_age" name="fam_age">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="edu_grade">ผลการเรียน</label>
                        <input class="form-control" type="text" id="fam_job" name="fam_job">
                    </div>
                </div>
                <br>
            </div>

            <!-- step five --------------------------------------------------- -->
            <div class="step">
                <p class="text-center mb-4">ข้อมูลประสบการณ์ทำงาน</p>
                <div class="row">
                <div class="mb-3 col-md-4 form-group">
                        <label for="ex_company">สถานที่ทำงาน</label>
                        <input class="form-control" type="text" id="ex_company" name="ex_company">
                    </div>
                    <div class="mb-4 col-md-4 form-group">
                        <label for="ex_province">จังหวัด</label>
                        <select id="ex_province" class="form-control">
                            <option selected>กรุณาเลือก...</option>
                            <option>ปัตตานี</option>
                            <option>ยะลา</option>
                            <option>นราธิวาส</option>
                            <option>สงขลา</option>
                            <option>สตูล</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="ex_pos">ตำแหน่งงาน</label>
                        <input class="form-control" type="text" id="ex_pos" name="ex_pos">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="ex_des">ลักษณะงาน</label>
                        <input class="form-control" type="text" id="ex_des" name="ex_des">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="ex_begin">ปีที่เริ่มทำงาน</label>
                        <input class="form-control" type="text" id="ex_begin" name="ex_begin">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="ex_end">ปีที่สิ้นสุด</label>
                        <input class="form-control" type="text" id="ex_end" name="ex_end">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="ex_salary">ค่าจ้าง</label>
                        <input class="form-control" type="text" id="ex_salary" name="ex_salary">
                    </div>
                    <div class="mb-3 col-md-4 form-group">
                        <label for="ex_reason">เหตุผลที่ออก</label>
                        <input class="form-control" type="text" id="ex_reason" name="ex_reason">
                    </div>

                </div>
                <br>
            </div>

            <!-- step six --------------------------------------------------- -->
            <div class="step">
                <p class="text-center mb-4">Your presence on the social network</p>
                <div class="mb-3">
                    <input type="text" placeholder="Linked In" oninput="this.className = ''" name="linkedin">
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Twitter" oninput="this.className = ''" name="twitter">
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Facebook" oninput="this.className = ''" name="facebook">
                </div>
            </div>

            <!-- step seven --------------------------------------------------- -->
            <div class="step">
                <p class="text-center mb-4">Create your account</p>
                <div class="mb-3">
                    <input type="email" placeholder="Email Address" oninput="this.className = ''" name="email">
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Password" oninput="this.className = ''" name="password">
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Confirm Password" oninput="this.className = ''" name="password">
                </div>
            </div>

            <!-- step eight --------------------------------------------------- -->
            <div class="step">
                <p class="text-center mb-4">Your presence on the social network</p>
                <div class="mb-3">
                    <input type="text" placeholder="Linked In" oninput="this.className = ''" name="linkedin">
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Twitter" oninput="this.className = ''" name="twitter">
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Facebook" oninput="this.className = ''" name="facebook">
                </div>
            </div>

            <!-- step nine --------------------------------------------------- -->
            <div class="step">
                <p class="text-center mb-4">We will never sell it</p>
                <div class="mb-3">
                    <input type="text" placeholder="Full name" oninput="this.className = ''" name="fullname">
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Mobile" oninput="this.className = ''" name="mobile">
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Address" oninput="this.className = ''" name="address">
                </div>
            </div>

            <!-- start previous / next buttons -->
            <div class="form-footer d-flex">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
            <!-- end previous / next buttons -->
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

<script>
    // Multiple step form
    var currentTab = 0; // Current tab is set to be the first tab (0)        
    showTab(currentTab); // Display the current tab                
    function showTab(n) {
        // This function will display the specified tab of the form...          
        var x = document.getElementsByClassName("step");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:          
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator: 
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display  
        var x = document.getElementsByClassName("step");
        // Exit the function if any field in the current tab is invalid:  
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:        
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:  
        currentTab = currentTab + n;
        // if you have reached the end of the form..
        if (currentTab >= x.length) {
            // ... the form gets submitted: 
            document.getElementById("signUpForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:       
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields    
        var x, y, i, valid = true;
        x = document.getElementsByClassName("step");
        y = x[currentTab].getElementsByTagName("input");
        // // A loop that checks every input field in the current tab:     
        // for (i = 0; i < y.length; i++) {
        //     // If a field is empty...       
        //     if (y[i].value == "") {
        //         // add an "invalid" class to the field:  
        //         y[i].className += " invalid";
        //         // and set the current valid status to false 
        //         valid = false;
        //     }
        // }
        // // If the valid status is true, mark the step as finished and valid:       
        if (valid) {
            document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
        }
        return valid; // return the valid status       
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...  
        var i, x = document.getElementsByClassName("stepIndicator");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:     
        x[n].className += " active";
    }
</script>


</html>