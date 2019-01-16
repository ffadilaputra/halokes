
<script src="{{ base_url('assets/wordify') }}/js/jquery-3.2.1.min.js"></script>
<script src="{{ base_url('assets/wordify') }}/js/popper.min.js"></script>
<script src="{{ base_url('assets/wordify') }}/js/bootstrap.min.js"></script>
<script src="{{ base_url('assets/wordify') }}/js/owl.carousel.min.js"></script>
<script src="{{ base_url('assets/wordify') }}/js/jquery.waypoints.min.js"></script>
<script src="{{ base_url('assets/wordify') }}/js/jquery.stellar.min.js"></script>
<script src="{{ base_url('assets/wordify') }}/js/jquery-migrate-3.0.0.js"></script>
<script src="{{ base_url('assets/wordify') }}/js/main.js"></script>


<!-- <script>
    $(function(){
        var containerr = $('.containerr'), inputFile = $('#file'), img, btn, txt = 'Browse', txtAfter = 'Browse another pic';
                
        if(!containerr.find('#upload').length){
            containerr.find('.input').append('<input type="button" value="'+txt+'" id="upload">');
            btn = $('#upload');
            containerr.prepend('<img src="" class="hidden" alt="Uploaded file" id="uploadImg" width="100">');
            img = $('#uploadImg');
        }
                
        btn.on('click', function(){
            img.animate({opacity: 0}, 300);
            inputFile.click();
        });

        inputFile.on('change', function(e){
            containerr.find('label').html( inputFile.val() );
            
            var i = 0;
            for(i; i < e.originalEvent.srcElement.files.length; i++) {
                var file = e.originalEvent.srcElement.files[i], 
                    reader = new FileReader();

                reader.onloadend = function(){
                    img.attr('src', reader.result).animate({opacity: 1}, 700);
                }
                reader.readAsDataURL(file);
                img.removeClass('hidden');
            }
            
            btn.val( txtAfter );
        });
    });
</script> -->

<!-- <script>
    $(function(){
        var containerr = $('.container2'), inputFile = $('#file2'), img, btn, txt = 'Browse', txtAfter = 'Browse another pic';
                
        if(!containerr.find('#upload').length){
            containerr.find('.input').append('<input type="button" value="'+txt+'" id="upload">');
            btn = $('#upload');
            containerr.prepend('<img src="" class="hidden" alt="Uploaded file" id="uploadImg2" width="100">');
            img = $('#uploadImg2');
        }
                
        btn.on('click', function(){
            img.animate({opacity: 0}, 300);
            inputFile.click();
        });

        inputFile.on('change', function(e){
            containerr.find('label').html( inputFile.val() );
            
            var i = 0;
            for(i; i < e.originalEvent.srcElement.files.length; i++) {
                var file = e.originalEvent.srcElement.files[i], 
                    reader = new FileReader();

                reader.onloadend = function(){
                    img.attr('src', reader.result).animate({opacity: 1}, 700);
                }
                reader.readAsDataURL(file);
                img.removeClass('hidden');
            }
            
            btn.val( txtAfter );
        });
    });
</script> -->


<script>
// santri
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#santri')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
// wali
function readURL2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wali')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// ayah
function readURL3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#ayah')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// ibu
function readURL4(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#ibu')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// akte
function readURL5(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#akte')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// kk
function readURL6(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// bpjs
function readURL7(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah2')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// ktp
function readURL8(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#ktp')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// ktp wali
function readURL9(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#ktpwali')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// ktp ayah
function readURL10(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#ktpayah')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// ktp ibu
function readURL11(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#ktpibu')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// ijazah
function readURL12(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#ijazah')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// skhun
function readURL13(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah3')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

</script>



    
    
    