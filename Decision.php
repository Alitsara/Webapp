<?php
$sex=$_POST['S1'];//เพศ
$defect=$_POST['S2'];//ความบกพร่อง
$caregiver=$_POST['04'];//ผู้ดูแล
$allergy=$_POST['lose'];//อาการแพ้
$level=$_POST['study'];//ระดับการศึกษา
$stt=$_POST['status'];//สถานะ
$address=$_POST['add'];//ประเภทที่อยู่
$occu=$_POST['job'];//อาชีพ
$salary=$_POST['income'];//รายได้
$diss=$_POST['dis'];//ชื่อโรค
//แก้เป็น if-else
if ($allergy === "dream") {
    if ($occu=== "M") {
        if ($diss === "1A") {
            echo "<script>window.location='4drama.php';</script>";
        } elseif ($diss === "7A") {
            echo "<script>window.location='4drama.php';</script>";
        } else{
            echo "<script>window.location='1pets.php';</script>";
        }
    }elseif ($occu === "Y"){
        echo "<script>window.location='1pets.php';</script>";
    }elseif ($occu === "X"){
        echo "<script>window.location='1pets.php';</script>";
    }elseif ($occu === "W"){
        echo "<script>window.location='3cook.php';</script>";
    }elseif ($occu === "Z"){
        echo "<script>window.location='6garden.php';</script>";
    }elseif ($occu === "F"){
        echo "<script>window.location='8social.php';</script>";
    }
}elseif ($allergy === "not"){
    if($diss === "2A"){
        if($stt === "divorce"){
           if($occu === "M"){
                if($salary === "down"){
                    echo "<script>window.location='8social.php';</script>";
                }elseif ($salary === "up"){
                    echo "<script>window.location='1pets.php';</script>";
                }elseif ($salary === "center"){
                    echo "<script>window.location='1pets.php';</script>";
                }
            }elseif ($occu === "Y"){
                echo "<script>window.location='1pets.php';</script>";
            }elseif ($occu === "X"){
                echo "<script>window.location='1pets.php';</script>";
            }elseif ($occu === "W"){
                echo "<script>window.location='1pets.php';</script>";
            }elseif ($occu === "Z"){
                echo "<script>window.location='4drama.php';</script>";
            }elseif ($occu === "F"){
                echo "<script>window.location='1pets.php';</script>";
            }
        }elseif($stt === "marry"){
            if($sex === "Female"){
                if($salary === "down"){
                    if($occu === "M"){
                        echo "<script>window.location='8social.php';</script>";
                    }elseif ($occu === "Y"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif ($occu === "X"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif ($occu === "W"){
                        echo "<script>window.location='6garden.php';</script>";
                    }elseif ($occu === "Z"){
                        echo "<script>window.location='6garden.php';</script>";
                    }elseif ($occu === "F"){
                        echo "<script>window.location='1pets.php';</script>";
                    }
                }elseif ($salary === "up"){
                    echo "<script>window.location='1pets.php';</script>";
                }elseif ($salary === "center"){
                    if($occu === "M"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif ($occu === "Y"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif ($occu === "X"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif ($occu === "W"){
                        echo "<script>window.location='8social.php';</script>";
                    }elseif ($occu === "Z"){
                        echo "<script>window.location='3cook.php';</script>";
                    }elseif ($occu === "F"){
                        echo "<script>window.location='1pets.php';</script>";
                    }
                }
            }elseif($sex === "Male"){
                if($level === "VVC"){
                    echo "<script>window.location='7music.php';</script>";
                }elseif($level === "primary"){
                    echo "<script>window.location='1pets.php';</script>";
                }elseif($level === "degree"){
                    if($salary === "down"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif ($salary === "up"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif ($salary === "center"){
                        echo "<script>window.location='6garden.php';</script>";
                    }
                }elseif($level === "high"){
                    if($occu === "M"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif ($occu === "Y"){
                        if($salary === "down"){
                            echo "<script>window.location='1pets.php';</script>";
                        }elseif ($salary === "up"){
                            echo "<script>window.location='1pets.php';</script>";
                        }elseif ($salary === "center"){
                            echo "<script>window.location='3cook.php';</script>";
                        }
                    }elseif ($occu === "X"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif ($occu === "W"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif ($occu === "Z"){
                        echo "<script>window.location='7music.php';</script>";
                    }elseif ($occu === "F"){
                        echo "<script>window.location='1pets.php';</script>";
                    }
                }
            }
        }elseif($stt === "widowed"){
            if($occu === "M"){
                if($defect === "None"){
                    echo "<script>window.location='3cook.php';</script>";
                }elseif($defect === "Have"){
                    echo "<script>window.location='9temple.php';</script>";
                }
            }elseif ($occu === "Y"){
                echo "<script>window.location='1pets.php';</script>";
            }elseif ($occu === "X"){
                echo "<script>window.location='4drama.php';</script>";
            }elseif ($occu === "W"){
                echo "<script>window.location='1pets.php';</script>";
            }elseif ($occu === "Z"){
                if($level === "VVC"){
                    echo "<script>window.location='6garden.php';</script>";
                }elseif($level === "primary"){
                    echo "<script>window.location='1pets.php';</script>";
                }elseif($level === "degree"){
                    echo "<script>window.location='1pets.php';</script>";
                }elseif($level === "high"){
                    echo "<script>window.location='4drama.php';</script>";
                }
            }elseif ($occu === "F"){
                echo "<script>window.location='5exercising.php';</script>";
            }
        }elseif($stt === "single"){
            if($level === "VVC"){
                echo "<script>window.location='1pets.php';</script>";
            }elseif($level === "primary"){
                echo "<script>window.location='1pets.php';</script>";
            }elseif($level === "degree"){
                if($sex === "Female"){
                    echo "<script>window.location='10travel.php';</script>";
                }elseif($sex === "Male"){
                    if($occu === "M"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif ($occu === "Y"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif ($occu === "X"){
                        echo "<script>window.location='2book.php';</script>";
                    }elseif ($occu === "W"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif ($occu === "Z"){
                        echo "<script>window.location='9temple.php';</script>";
                    }elseif ($occu === "F"){
                        echo "<script>window.location='1pets.php';</script>";
                    }
                }
            }elseif($level === "high"){
                if($occu === "M"){
                    echo "<script>window.location='10travel.php';</script>";
                }else{
                    echo "<script>window.location='1pets.php';</script>";
                }
            }
        }
    }elseif($diss === "1A"){
        if($occu === "M"){
            if($sex === "Female"){
                if($level === "VVC"){
                    echo "<script>window.location='1pets.php';</script>";
                }elseif($level === "primary"){
                    echo "<script>window.location='1pets.php';</script>";
                }elseif($level === "degree"){
                    if($salary === "down"){
                        echo "<script>window.location='3cook.php';</script>";
                    }elseif ($salary === "up"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif ($salary === "center"){
                        echo "<script>window.location='10travel.php';</script>";
                    }
                }elseif($level === "high"){
                    if($address === "hire"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif($address === "private"){
                        echo "<script>window.location='10travel.php';</script>";
                    }elseif($address === "apart"){
                        echo "<script>window.location='8social.php';</script>";
                    }elseif($address === "condo"){
                        echo "<script>window.location='1pets.php';</script>";
                    }
                }
            }elseif($sex === "Male"){
                if($stt === "widowed"){
                    echo "<script>window.location='9temple.php';</script>";
                }else{
                    echo "<script>window.location='1pets.php';</script>";
                }
            }
        }elseif ($occu === "Y"){
            if($sex === "Female"){
                if($stt === "divorce"){
                    echo "<script>window.location='4drama.php';</script>";
                }elseif($stt === "marry"){
                    echo "<script>window.location='2book.php';</script>";
                }elseif($stt === "widowed"){
                    echo "<script>window.location='1pets.php';</script>";
                }elseif($stt === "single"){
                    echo "<script>window.location='1pets.php';</script>";
                }
            }elseif($sex === "Male"){
                if($stt === "divorce"){
                    echo "<script>window.location='1pets.php';</script>";
                }elseif($stt === "marry"){
                    echo "<script>window.location='1pets.php';</script>";
                }elseif($stt === "widowed"){
                    echo "<script>window.location='10travel.php';</script>";
                }elseif($stt === "single"){
                    echo "<script>window.location='8social.php';</script>";
                }
            }
        }elseif ($occu === "X"){
            if($salary === "down"){
                echo "<script>window.location='1pets.php';</script>";
            }elseif($salary === "up"){
                echo "<script>window.location='5exercising.php';</script>";
            }elseif($salary === "center"){
                if($sex === "Female"){
                    if($stt === "divorce"){
                        echo "<script>window.location='10travel.php';</script>";
                    }elseif($stt === "marry"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif($stt === "widowed"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif($stt === "single"){
                        if($address === "hire"){
                            echo "<script>window.location='10travel.php';</script>";
                        }elseif($address === "private"){
                            echo "<script>window.location='1pets.php';</script>";
                        }elseif($address === "apart"){
                            echo "<script>window.location='5exercising.php';</script>";
                        }elseif($address === "condo"){
                            echo "<script>window.location='1pets.php';</script>";
                        }
                    }
                }elseif($sex === "Male"){
                    if($stt === "divorce"){
                        echo "<script>window.location='5exercising.php';</script>";
                    }elseif($stt === "marry"){
                        echo "<script>window.location='5exercising.php';</script>";
                    }elseif($stt === "widowed"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif($stt === "single"){
                        if($address === "hire"){
                            echo "<script>window.location='1pets.php';</script>";
                        }elseif($address === "private"){
                            echo "<script>window.location='2book.php';</script>";
                        }elseif($address === "apart"){
                            echo "<script>window.location='5exercising.php';</script>";
                        }elseif($address === "condo"){
                            echo "<script>window.location='1pets.php';</script>";
                        }
                    }
                }
            }
        }elseif ($occu === "W"){
            echo "<script>window.location='5exercising.php';</script>";
        }elseif ($occu === "Z"){
            if($stt === "divorce"){
                echo "<script>window.location='7music.php';</script>";
            }elseif($stt === "marry"){
                echo "<script>window.location='6garden.php';</script>";
            }elseif($stt === "widowed"){
                echo "<script>window.location='3cook.php';</script>";
            }elseif($stt === "single"){
                echo "<script>window.location='1pets.php';</script>";
            }
        }elseif ($occu === "F"){
            if($stt === "divorce"){
                echo "<script>window.location='1pets.php';</script>";
            }elseif($stt === "marry"){
                echo "<script>window.location='1pets.php';</script>";
            }elseif($stt === "widowed"){
                echo "<script>window.location='10travel.php';</script>";
            }elseif($stt === "single"){
                echo "<script>window.location='5exercising.php';</script>";
            }
        }
    }elseif($diss === "5A"){
        if($sex === "Female"){
            echo "<script>window.location='9temple.php';</script>";
        }else{
            echo "<script>window.location='5exercising.php';</script>";
        }
    }elseif($diss === "3A"||$diss === "2A"||$diss === "4A"){
        if($salary === "down"){
            if($occu === "M"){
                echo "<script>window.location='7music.php';</script>";
            }elseif ($occu === "Y"){
                echo "<script>window.location='1pets.php';</script>";
            }elseif ($occu === "X"){
                echo "<script>window.location='1pets.php';</script>";
            }elseif ($occu === "W"){
                echo "<script>window.location='4drama.php';</script>";
            }elseif ($occu === "Z"){
                echo "<script>window.location='1pets.php';</script>";
            }elseif ($occu === "F"){
                echo "<script>window.location='1pets.php';</script>";
            }
        }elseif($salary === "up"){
            echo "<script>window.location='1pets.php';</script>";
        }elseif($salary === "center"){
            echo "<script>window.location='9temple.php';</script>";
        }
    }elseif($diss === "3A"){
        if($occu === "M"){
            if($stt === "divorce"){
                if($level === "primary"){
                    echo "<script>window.location='9temple.php';</script>";
                }else{
                    echo "<script>window.location='1pets.php';</script>";
                }
            }elseif($stt === "marry"){
                echo "<script>window.location='9temple.php';</script>";
            }elseif($stt === "widowed"){
                echo "<script>window.location='8social.php';</script>";
            }elseif($stt === "single"){
                if($salary === "down"){
                    echo "<script>window.location='7music.php';</script>";
                }elseif($salary === "up"){
                    echo "<script>window.location='1pets.php';</script>";
                }elseif($salary === "center"){
                    echo "<script>window.location='8social.php';</script>";
                }
            }
        }elseif ($occu === "Y"){
            echo "<script>window.location='1pets.php';</script>";
        }elseif ($occu === "X"){
            if($salary === "down"){
                echo "<script>window.location='1pets.php';</script>";
            }elseif($salary === "up"){
                echo "<script>window.location='6garden.php';</script>";
            }elseif($salary === "center"){
                echo "<script>window.location='5exercising.php';</script>";
            }
        }elseif ($occu === "W"){
            if($stt === "divorce"){
                echo "<script>window.location='3cook.php';</script>";
            }elseif($stt === "marry"){
                if($salary === "down"){
                    echo "<script>window.location='3cook.php';</script>";
                }elseif($salary === "up"){
                    echo "<script>window.location='1pets.php';</script>";
                }elseif($salary === "center"){
                    echo "<script>window.location='5exercising.php';</script>";
                }
            }elseif($stt === "widowed"){
                echo "<script>window.location='5exercising.php';</script>";
            }elseif($stt === "single"){
                echo "<script>window.location='1pets.php';</script>";
            }
        }elseif ($occu === "Z"){
            if($stt === "divorce"){
                echo "<script>window.location='1pets.php';</script>";
            }elseif($stt === "marry"){
                if($level === "VVC"){
                    if($sex === "Female"){
                        echo "<script>window.location='9temple.php';</script>";
                    }else{
                        echo "<script>window.location='6garden.php';</script>";
                    }
                }else{
                    echo "<script>window.location='6garden.php';</script>";
                }
            }elseif($stt === "widowed"){
                echo "<script>window.location='5exercising.php';</script>";
            }elseif($stt === "single"){
                echo "<script>window.location='1pets.php';</script>";
            }
        }elseif ($occu === "F"){
            echo "<script>window.location='1pets.php';</script>";
        }
    }elseif($diss === "3A"||$diss === "5A"){
        echo "<script>window.location='1pets.php';</script>";
    }elseif($diss === "7A"){
        echo "<script>window.location='1pets.php';</script>";
    }elseif($diss === "6A"||$diss==="3A"){
        if($stt === "divorce"){
            echo "<script>window.location='1pets.php';</script>";
        }elseif($stt === "marry"){
            if($level === "VVC"){
                echo "<script>window.location='4drama.php';</script>";
            }elseif($level === "degree"){
                echo "<script>window.location='3cook.php';</script>";
            }else{
                echo "<script>window.location='1pets.php';</script>";
            }
        }elseif($stt === "widowed"){
            echo "<script>window.location='1pets.php';</script>";
        }elseif($stt === "single"){
            echo "<script>window.location='1pets.php';</script>";
        }
    }elseif($diss === "2A"||$diss === "5A"){
        if($occu === "M"){
            echo "<script>window.location='1pets.php';</script>";
        }elseif ($occu === "Y"){
            echo "<script>window.location='1pets.php';</script>";
        }elseif ($occu === "X"){
            echo "<script>window.location='1pets.php';</script>";
        }elseif ($occu === "W"){
            if($level === "VVC"){
                echo "<script>window.location='1pets.php';</script>";
            }elseif($level === "primary"){
                echo "<script>window.location='9temple.php';</script>";
            }elseif($level === "degree"){
                echo "<script>window.location='1pets.php';</script>";
            }elseif($level === "high"){
                if($defect === "None"){
                    echo "<script>window.location='1pets.php';</script>";
                }else{
                    echo "<script>window.location='9temple.php';</script>";
                }
            }
        }elseif ($occu === "Z"){
            echo "<script>window.location='1pets.php';</script>";
        }elseif ($occu === "F"){
            echo "<script>window.location='3cook.php';</script>";
        }
    }elseif($diss === "6A"||$diss === "3A"||$diss === "2A"){
        echo "<script>window.location='4drama.php';</script>";
    }elseif($diss === "3A"||$diss === "2A"){
        if($salary === "down"){
            if($stt === "divorce"){
                echo "<script>window.location='5exercising.php';</script>";
            }elseif($stt === "marry"){
                if($level === "VVC"){
                    echo "<script>window.location='1pets.php';</script>";
                }elseif($level === "primary"){
                    if($occu === "W"){
                        echo "<script>window.location='3cook.php';</script>";
                    }else{
                        echo "<script>window.location='1pets.php';</script>";
                    }
                }elseif($level === "degree"){
                    echo "<script>window.location='1pets.php';</script>";
                }elseif($level === "high"){
                    if($occu === "M"){
                        echo "<script>window.location='7music.php';</script>";
                    }elseif($occu === "W"){
                        echo "<script>window.location='2book.php';</script>";
                    }else{
                        echo "<script>window.location='1pets.php';</script>";
                    }
                }
            }elseif($stt === "widowed"){
                echo "<script>window.location='10travel.php';</script>";
            }elseif($stt === "single"){
                echo "<script>window.location='7music.php';</script>";
            }
        }elseif($salary === "up"){
            echo "<script>window.location='10travel.php';</script>";
        }elseif($salary === "center"){
            if($address === "hire"){
                echo "<script>window.location='1pets.php';</script>";
            }elseif($address === "private"){
                if($occu === "M"){
                    if($level === "VVC"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif($level === "primary"){
                        echo "<script>window.location='4drama.php';</script>";
                    }elseif($level === "degree"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif($level === "high"){
                        echo "<script>window.location='10travel.php';</script>";
                    }
                }elseif ($occu === "Y"){
                    echo "<script>window.location='1pets.php';</script>";
                }elseif ($occu === "X"){
                    if($stt === "divorce"){
                        echo "<script>window.location='8social.php';</script>";
                    }elseif($stt === "marry"){
                        echo "<script>window.location='3cook.php';</script>";
                    }elseif($stt === "widowed"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif($stt === "single"){
                        echo "<script>window.location='1pets.php';</script>";
                    }
                }elseif ($occu === "W"){
                    if($level === "VVC"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif($level === "primary"){
                        echo "<script>window.location='3cook.php';</script>";
                    }elseif($level === "degree"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif($level === "high"){
                        echo "<script>window.location='10travel.php';</script>";
                    }
                }elseif ($occu === "Z"){
                    if($stt === "divorce"){
                        echo "<script>window.location='1pets.php';</script>";
                    }elseif($stt === "marry"){
                        echo "<script>window.location='3cook.php';</script>";
                    }elseif($stt === "widowed"){
                        echo "<script>window.location='7music.php';</script>";
                    }elseif($stt === "single"){
                        echo "<script>window.location='1pets.php';</script>";
                    }
                }elseif ($occu === "F"){
                    echo "<script>window.location='1pets.php';</script>";
                }
            }elseif($address === "apart"){
                echo "<script>window.location='10travel.php';</script>";
            }elseif($address === "condo"){
                echo "<script>window.location='1pets.php';</script>";
            }
        }
    }elseif($diss === "2A"||$diss === "7A"){
        echo "<script>window.location='4drama.php';</script>";
    }elseif($diss === "2A"||$diss === "4A"){
        if($stt === "divorce"){
            echo "<script>window.location='1pets.php';</script>";
        }elseif($stt === "marry"){
            echo "<script>window.location='4drama.php';</script>";
        }elseif($stt === "widowed"){
            if($level === "VVC"){
                echo "<script>window.location='1pets.php';</script>";
            }elseif($level === "primary"){
                echo "<script>window.location='4drama.php';</script>";
            }elseif($level === "degree"){
                echo "<script>window.location='1pets.php';</script>";
            }elseif($level === "high"){
                echo "<script>window.location='7music.php';</script>";
            }
        }elseif($stt === "single"){
            echo "<script>window.location='1pets.php';</script>";
        }
    }elseif($diss === "3A"||$diss === "2A"||$diss === "5A"){
        if($level === "VVC"){
            echo "<script>window.location='1pets.php';</script>";
        }elseif($level === "primary"){
            if($occu === "W"){
                echo "<script>window.location='9temple.php';</script>";
            }else{
                echo "<script>window.location='1pets.php';</script>";
            }
        }elseif($level === "degree"){
            echo "<script>window.location='1pets.php';</script>";
        }elseif($level === "high"){
            echo "<script>window.location='1pets.php';</script>";
        }
    }
}elseif($allergy === "pet"){
    if($diss === "2A"){
        if($stt === "divorce"){
            echo "<script>window.location='9temple.php';</script>";
        }elseif($stt === "marry"){
            echo "<script>window.location='10travel.php';</script>";
        }elseif($stt === "widowed"){
            echo "<script>window.location='2book.php';</script>";
        }elseif($stt === "single"){
            echo "<script>window.location='3cook.php';</script>";
        }
    }elseif($diss === "5A"){
        echo "<script>window.location='6garden.php';</script>";
    }elseif($diss === "3A"){
        echo "<script>window.location='8social.php';</script>";
    }else{
        echo "<script>window.location='4drama.php';</script>";   
    }
}elseif($allergy === "food"){
    if($occu === "M"){
        if($diss === "2A"){
            echo "<script>window.location='4drama.php';</script>";
        }elseif($diss === "1A"){
            echo "<script>window.location='5exercising.php';</script>";
        }else{
            echo "<script>window.location='1pets.php';</script>"; 
        }
    }else{
        echo "<script>window.location='1pets.php';</script>"; 
    }
}
?>
