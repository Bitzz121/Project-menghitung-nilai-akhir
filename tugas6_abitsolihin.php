<link rel="stylesheet" href="style.css">

<section id="iqqo1" class="gpd-section">
    <div id="iost7" class="gpd-container">
        <div id="iqeze" class="gdp-row">
            <div id="izx1u" class="cell">
                <h1 id="ikb9j" data-anim-type="fadeInUp" class="gpd-header">Nilai peserta pelatihan
                </h1>
            </div>
        </div>
    </div>
</section>
<style>
html {
    scroll-behavior: smooth;
}
</style>
<section class="gpd-section">
    <div class="gpd-container gpd-cnt">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" id="iddiq" data-redirect="" class="form">
            <div class="gpd-text" id="i9odd">
                <strong>Input Nilai:</strong>
            </div>
            <div class="form-group">
                <label class="label">Nilai Praktik</label>
                <input type="number" placeholder="Tulis Nilai" name="praktik" min="1" max="100" required
                    class="input" />
            </div>
            <div class="form-group">
                <label class="label">Nilai Pilihan Ganda</label>
                <input type="number" placeholder="Tulis Nilai" name="pilihan_ganda" min="1" max="100" required
                    class="input" />
            </div>
            <div class="form-group">
                <label class="label">Nilai Kehadiran</label>
                <input type="number" placeholder="Tulis Nilai" name="kehadiran" min="1" max="100" required
                    class="input" />
            </div>
            <div class="form-group">
                <label class="label">Nilai Sikap</label>
                <input type="number" placeholder="Tulis Nilai" name="sikap" min="1" max="100" required class="input" />
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="button" id="ifuac">Send</button>
            </div>
            <div data-form-state="success" class="state-success" id="irdrg">Thanks! We received your request
            </div>
            <div data-form-state="error" class="state-error" id="ilwbx">An error occurred on processing your request,
                try again!
            </div>
        </form>
        <?php
$nilai_akhir ="";
$kriteria ="";
if (isset($_POST["submit"])){
    $praktik =$_POST["praktik"];
    $pilihan_ganda=$_POST["pilihan_ganda"];
    $kehadiran=$_POST["kehadiran"];
    $sikap=$_POST["sikap"];
    $nilai_akhir=(0.6*$praktik)+(0.3*$pilihan_ganda)+(0.05*$kehadiran)+(0.05*$sikap);
    if(($nilai_akhir >= 100) || ($nilai_akhir < 0)){
        $kriteria = "Nilai Akhira Tidak Valid";
    }
    else if($nilai_akhir >= 95){
        $kriteria = "Memuaskan";
    }
    else if($nilai_akhir >= 85){
        $kriteria = "Baik Sekali";
    }
    else if($nilai_akhir >= 75){
        $kriteria = "Baik";
    }
    else if($nilai_akhir >= 65){
        $kriteria = "Cukup";
    }
    else{
        $kriteria = "Tidak Lulus";
    }
}

echo '<div class="gpd-text">
<strong>Nilai Akhir :'.$nilai_akhir;
echo '<br>Kriteria Kelulusan :'.$kriteria;
echo '</div>'

?>
    </div>
</section>