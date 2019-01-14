
<script src="{{ base_url('assets/wordify') }}/js/jquery-3.2.1.min.js"></script>
<script src="{{ base_url('assets/wordify') }}/js/popper.min.js"></script>
<script src="{{ base_url('assets/wordify') }}/js/bootstrap.min.js"></script>
<script src="{{ base_url('assets/wordify') }}/js/owl.carousel.min.js"></script>
<script src="{{ base_url('assets/wordify') }}/js/jquery.waypoints.min.js"></script>
<script src="{{ base_url('assets/wordify') }}/js/jquery.stellar.min.js"></script>
<script src="{{ base_url('assets/wordify') }}/js/jquery-migrate-3.0.0.js"></script>
<script src="{{ base_url('assets/wordify') }}/js/main.js"></script>


<script>
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
</script>

<script>
    $(function(){
        var containerr = $('.containerr'), inputFile = $('#file'), img, btn, txt = 'Browse', txtAfter = 'Browse another pic';
                
        if(!containerr.find('#upload2').length){
            containerr.find('.input2').append('<input type="button" value="'+txt+'" id="upload2">');
            btn = $('#upload2');
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
</script>

    
    
    