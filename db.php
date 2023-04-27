<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'ippl';

    $connected = mysqli_connect($host,$user,$pass,$db) or die (mysqli_error($connected));

    if(isset($_POST['bAdd'])){
        $save = mysqli_query($connected,"INSERT INTO alternatif VALUES
                                    ('$_POST[id]',
                                    '$_POST[nama]',
                                    '$_POST[kriteria1]',
                                    '$_POST[kriteria2]',
                                    '$_POST[kriteria3]',
                                    '$_POST[kriteria4]',
                                    '$_POST[kriteria5]')");
    
        if($save){
            echo "<script>
                    alert('Data saved successfully!');
                    document.location = 'index.php';
                </script>";
        }else{
            echo "<script>
                    alert('Data failed to saved!');
                    document.location = 'index.php';
                </script>";
        }
    }
    
    if(isset($_POST['bChange'])){
        $edit = mysqli_query($connected,"UPDATE alternatif SET
                                            kriteria1 = '$_POST[kriteria1]',
                                            kriteria2 = '$_POST[kriteria2]',
                                            kriteria3 = '$_POST[kriteria3]',
                                            kriteria4 = '$_POST[kriteria4]',
                                            kriteria5 = '$_POST[kriteria5]' WHERE id = '$_POST[id]'
                                            ");
    
        if($edit){
            echo "<script>
                    alert('Edit data successfully!');
                    document.location = 'index.php';
                </script>";
        }else{
            echo "<script>
                    alert('Edit data failed!');
                    document.location = 'index.php';
                </script>";
        }
    }
    
    if(isset($_POST['bDelete'])){
        $delete = mysqli_query($connected,"DELETE FROM alternatif WHERE id = '$_POST[id]' ");
    
        if($delete){
            echo "<script>
                    alert('Delete data successfully!');
                    document.location = 'index.php';
                </script>";
        }else{
            echo "<script>
                    alert('Delete data failed!');
                    document.location = 'index.php';
                </script>";
        }
    }
    
    if(isset($_POST['bChangelagi'])){
        $lagi = mysqli_query($connected,"UPDATE kriteria SET
                                            kriteria1 = '$_POST[kriteria1]',
                                            kriteria2 = '$_POST[kriteria2]',
                                            kriteria3 = '$_POST[kriteria3]',
                                            kriteria4 = '$_POST[kriteria4]',
                                            kriteria5 = '$_POST[kriteria5]'
                                            WHERE id = '$_POST[id]'
                                            ");
    
        if($lagi){
            echo "<script>
                    alert('Edit data successfully!');
                    document.location = 'index.php';
                </script>";
        }else{
            echo "<script>
                    alert('Edit data failed!');
                    document.location = 'index.php';
                </script>";
        }
    }
?>