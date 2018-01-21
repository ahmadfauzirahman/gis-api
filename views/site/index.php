<?php /* @var $this yii\web\View */ ?>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyB6lj2daUH1-6d-LjvvNinG2l1KA-LszbE"
        type="text/javascript"></script>

<div class="row">
    <div class="col-lg-12">

        <?php
        $amap = \yii\helpers\ArrayHelper::map($a, 'id_rayon', 'nama');
        $bmap = \yii\helpers\ArrayHelper::map($b, 'id_trafo', 'alamat');
        ?>
        <?=
        \kartik\select2\Select2::widget([
            'id' => 'id_rayon',
            'name' => 'id_rayon',
            'data' => $amap,
            'options' => [
                'placeholder' => 'Pilih Rayon',
            ],
        ]);
        ?>
        <br>
        <?=
        \kartik\select2\Select2::widget([
            'id' => 'id_trafo',
            'name' => 'id_trafo',
            'data' => $bmap,
            'options' => [
                'placeholder' => 'Pilih Trafo',
            ],
        ]);
        ?>
        <br>
        <?=
        \yii\helpers\Html::button('Pilih', ['class' => 'btn btn-primary', 'id' => 'btn-pilih'])
        ?>
    </div>
</div>
<br>
<div id="map" style="width: 1210px; height: 700px;"></div>
<? //= var_dump($lokasi) ?>
<?php
$this->registerJs(" 
        var locations = [];
        var lampu  [];
    $('#id_rayon').change(function () {
        var sendInfo = {
            id_rayon: $('#id_rayon').val()
        }
        $.ajax({
            type: 'POST',
            data: sendInfo,
            url: '/gis/api/v1/video/trafo',
            contentType: 'application/x-www-form-urlencoded',
            success: function (response) {
                console.log(response);
                console.log(JSON.stringify(response));
                locations = response;
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 13,
                    center: new google.maps.LatLng(".$a[0]['lad'].", ".$a[0]['long']."),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });
                var infowindow = new google.maps.InfoWindow();
                var marker, i;
                for (i = 0; i < locations.length; i++) {
                    console.log(locations[i].log);
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i].lat, locations[i].log),
                        map: map
                    });
                    google.maps.event.addListener(marker, 'click', (function (marker, i) {
                        return function () {
                            infowindow.setContent(locations[i].alamat);
                            infowindow.open(map, marker);
                        }
                    })(marker, i));
                }

                $('#id_trafo').change(function () {

                    var sendInf = {
                        id_rayon: $('#id_rayon').val(),
                        id_trafo: $('#id_trafo').val()
                    }
                    $.ajax(
                        {
                        
                            type: 'POST',
                            data: sendInf,
                            url: '/gis/api/v1/video',
                            contentType: 'application/x-www-form-urlencoded',
                            success: function (response) {
                                console.log(response);
                                console.log(JSON.stringify(response));
                                lampu=response;
                                var map = new google.maps.Map(document.getElementById('map'), {
                                    zoom: 13,
                                    center: new google.maps.LatLng(".$a[0]['lad'].", ".$a[0]['long']."),
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                });
                                var infowindow = new google.maps.InfoWindow();
                                var marker, i;
                                for (i = 0; i < lampu.length; i++) {
                                    console.log(lampu[i].long);
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(lampu[i].lat, lampu[i].long),
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function (marker, i) {
                                        return function () {
                                            infowindow.setContent(lampu[i].nama);
                                            infowindow.open(map, marker);
                                        }
                                    })
                                    (marker, i));
                                }
                            },
                        });
                });
            }, }) ;
    });

   
 ");
?>

<script>



</script>
