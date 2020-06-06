@extends('layouts.master')
@section('content')
<div class="gap"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="entry-title entry-prop">Đăng tin Phòng trọ</h1>
            <hr>
            <div class="panel panel-default">
                <div class="panel-heading">Thông tin bắt buộc*</div>
                <div class="panel-body">


                    @if(session('warn'))
                    <div class="alert bg-danger">
                        <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                        <span class="text-semibold">Error!</span> {{session('warn')}}
                    </div>
                    @endif
                    @if(session('success'))
                    <div class="alert bg-success">
                        <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                        <span class="text-semibold">Done!</span> {{session('success')}}
                    </div>
                    @endif

                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="usr">Tiêu đề bài đăng:</label>
                            <input type="text" class="form-control" name="txttitle">
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ phòng trọ:</label> Bạn có thể nhập hoặc chọn ví trí trên bản đồ
                            <input type="text" id="location-text-box" name="txtaddress" class="form-control" value="" />
                            <p><i class="far fa-bell"></i> Nếu địa chỉ hiển thị bên bản đồ không đúng bạn có thể điều chỉnh bằng cách kéo điểm màu xanh trên bản đồ tới vị trí chính xác.</p>
                            <input type="hidden" id="txtaddress" name="txtaddress" value="" class="form-control" />
                            <input type="hidden" id="txtlat" value="" name="txtlat" class="form-control" />
                            <input type="hidden" id="txtlng" value="" name="txtlng" class="form-control" />
                        </div>
                        <div id="map-canvas" style="width: auto; height: 400px;"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="usr">Giá phòng( vnđ ):</label>
                                    <input type="number" name="txtprice" class="form-control" placeholder="750000">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="usr">Diện tích( m<sup>2</sup> ):</label>
                                    <input type="number" name="txtarea" class="form-control" placeholder="16">
                                </div>
                            </div>
                        </div>
                        <div class="row">


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="usr">SĐT Liên hệ:</label>
                                    <input type="text" name="txtphone" class="form-control" placeholder="Phone number">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- ************** Max Items Demo ************** -->
                            <label>Các tiện ích có trong phòng trọ:</label>
                            <select id="select-state" name="tienich[]" multiple class="demo-default" placeholder="Chọn các tiện ích phòng trọ">
                                <option value="Wifi miễn phí">Wifi miễn phí</option>
                                <option value="Có gác lửng">Có gác lửng</option>
                                <option value="Tủ + giường">Tủ + giường</option>
                                <option value="Không chung chủ">Không chung chủ</option>
                                <option value="Chung chủ">Chung chủ</option>
                                <option value="Giờ giấc tự do">Giờ giấc tự do</option>
                                <option value="Vệ sinh riêng">Vệ sinh riêng</option>
                                <option value="Vệ sinh chung">Vệ sinh chung</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="comment">Mô tả ngắn:</label>
                            <textarea class="form-control" rows="5" name="txtdescription" style=" resize: none;"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="comment">Thêm hình ảnh:</label>
                            <div class="file-loading">
                                <input id="file-5" type="file" class="file" name="hinhanh[]" multiple data-preview-file-type="any" data-upload-url="#">
                            </div>
                        </div>

                        <button class="btn btn-primary">Đăng Tin</button>
                    </form>

                    <div class="alert bg-danger">
                        <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                        <span class="text-semibold">Error!</span> Tài khoản của bạn đang bị khóa đăng tin.
                    </div>

                </div>
            </div>
        </div>

        <div class="gap"></div>
        <img src="images/banner-1.png" width="100%">
    </div>
</div>
</div>
<script type="text/javascript">
    $('#file-5').fileinput({
        theme: 'fa',
        language: 'vi',
        showUpload: false,
        allowedFileExtensions: ['jpg', 'png', 'gif']
    });
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzlVX517mZWArHv4Dt3_JVG0aPmbSE5mE&callback=initialize&libraries=geometry,places" async defer></script>
<script>
    var map;
    var marker;

    function initialize() {
        var mapOptions = {
            center: {
                lat: 18.665136,
                lng: 105.690173
            },
            zoom: 12
        };
        map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

        // Get GEOLOCATION
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = new google.maps.LatLng(position.coords.latitude,
                    position.coords.longitude);
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    'latLng': pos
                }, function(results, status) {
                    if (status ==
                        google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            console.log(results[0].formatted_address);
                        } else {
                            console.log('No results found');
                        }
                    } else {
                        console.log('Geocoder failed due to: ' + status);
                    }
                });
                map.setCenter(pos);
                marker = new google.maps.Marker({
                    position: pos,
                    map: map,
                    draggable: true
                });
            }, function() {
                handleNoGeolocation(true);
            });
        } else {
            // Browser doesn't support Geolocation
            handleNoGeolocation(false);
        }

        function handleNoGeolocation(errorFlag) {
            if (errorFlag) {
                var content = 'Error: The Geolocation service failed.';
            } else {
                var content = 'Error: Your browser doesn\'t support geolocation.';
            }

            var options = {
                map: map,
                zoom: 19,
                position: new google.maps.LatLng(18.665136, 105.690173),
                content: content
            };

            map.setCenter(options.position);
            marker = new google.maps.Marker({
                position: options.position,
                map: map,
                zoom: 19,
                draggable: true
            });
            /* Dragend Marker */
            google.maps.event.addListener(marker, 'dragend', function() {
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    'latLng': marker.getPosition()
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            $('#location-text-box').val(results[0].formatted_address);
                            $('#txtaddress').val(results[0].formatted_address);
                            $('#txtlat').val(marker.getPosition().lat());
                            $('#txtlng').val(marker.getPosition().lng());
                            infowindow.setContent(results[0].formatted_address);
                            infowindow.open(map, marker);
                        }
                    }
                });
            });
            /* End Dragend */

        }

        // get places auto-complete when user type in location-text-box
        var input = /** @type {HTMLInputElement} */
            (
                document.getElementById('location-text-box'));


        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        marker = new google.maps.Marker({
            map: map,
            icon: "https://scontent.fhan5-6.fna.fbcdn.net/v/t1.30497-1/c47.0.160.160a/p160x160/84241059_189132118950875_4138507100605120512_n.jpg?_nc_cat=1&_nc_sid=dbb9e7&_nc_ohc=nlZJS-UG4l4AX8fzolh&_nc_ht=scontent.fhan5-6.fna&oh=845e113af3bcec3a9fe15126dc50d4e7&oe=5EF03624",
            anchorPoint: new google.maps.Point(0, -29),
            draggable: true
        });

        google.maps.event.addListener(autocomplete, 'place_changed', function() {
            infowindow.close();
            marker.setVisible(false);
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                return;
            }
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({
                'latLng': place.geometry.location
            }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        $('#txtaddress').val(results[0].formatted_address);
                        infowindow.setContent(results[0].formatted_address);
                        infowindow.open(map, marker);
                    }
                }
            });
            // If the place has a geometry, then present it on a map.
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17); // Why 17? Because it looks good.
            }
            marker.setIcon( /** @type {google.maps.Icon} */ ({
                url: "https://scontent.fhan5-6.fna.fbcdn.net/v/t1.30497-1/c47.0.160.160a/p160x160/84241059_189132118950875_4138507100605120512_n.jpg?_nc_cat=1&_nc_sid=dbb9e7&_nc_ohc=nlZJS-UG4l4AX8fzolh&_nc_ht=scontent.fhan5-6.fna&oh=845e113af3bcec3a9fe15126dc50d4e7&oe=5EF03624"
            }));
            document.getElementById('txtlat').value = place.geometry.location.lat();
            document.getElementById('txtlng').value = place.geometry.location.lng();
            console.log(place.geometry.location.lat());
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);

            var address = '';
            if (place.address_components) {
                address = [
                    (place.address_components[0] && place.address_components[0].short_name || ''), (place.address_components[1] && place.address_components[1].short_name || ''), (place.address_components[2] && place.address_components[2].short_name || '')
                ].join(' ');
            }
            /* Dragend Marker */
            google.maps.event.addListener(marker, 'dragend', function() {
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    'latLng': marker.getPosition()
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            console.log(results[0].formatted_address);
                            $('#location-text-box').val(results[0].formatted_address);
                            $('#txtlat').val(marker.getPosition().lat());
                            $('#txtlng').val(marker.getPosition().lng());
                            infowindow.setContent(results[0].formatted_address);
                            infowindow.open(map, marker);
                        }
                    }
                });
            });
            /* End Dragend */
        });

    }


    // google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script type="text/javascript" src="assets/js/selectize.js"></script>
<script>
    $(function() {
        $('select').selectize(options);
    });
    $('#select-state').selectize({
        maxItems: null
    });
</script>
@endsection