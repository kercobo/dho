<div id="text" style="text-align: center;">
    <h3>Total Entri tiap Form</h3>
    <h3>Kecamatan <?=$kecamatan?></h3>
</div>
<div id="container">
    <!--
        graphic container
    -->
    <?php foreach($data as $user => $form){
    ?>
    <br>
    <div title="Total Entry Oleh <?=ucwords($user)?>">
            <div id="">
                <center><span style="font-size:16px; font-family:'Droid Sans',Arial,Verdana,sans-serif;"><strong>Total Entry Oleh <?=ucwords($user)?></strong>
                <!-- START Script Block for Chart -->
                <div id="<?=$user?>" align="center">
                </div>
                <!-- END Script Block for Chart -->                
            </div>
        </div>
    <br><br>
    <?php
    }
    ?>
</div>

<script src="<?=base_url()?>assets/js/highcharts.js"></script>
<script src="<?=base_url()?>assets/js/exporting.js"></script>
<script src="<?=base_url()?>assets/js/functions.js"></script>
<script>
    var json = <?=json_encode($data)?>;
    $.fn.showChartDataEntryForm(json);
</script> 