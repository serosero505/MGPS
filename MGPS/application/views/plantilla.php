<?php $this->load->view('includes/head'); ?>
<!---start-content---->
<br>
<!------ Slider ------------>
<div id="slider-wrapper">
    
    <div id="slider">
        <a href="URL_ENLACE1"><img src="img/1.jpg" />
            <a href="URL_ENLACE2"><img src="img/2.jpg" />
                </div>
                <a href="javascript:void();" class="mas">&rsaquo;</a>
                <a href="javascript:void();" class="menos">&lsaquo;</a></div>
                
                <style>
                    /* Contenedor general */
                    #slider-wrapper {
                        position: relative;
                        width: 1300px;
                        max-width: 100%;
                        margin: 0 auto;
                        padding: 0 10px;
                        font-family: arial, sans-serif;
                        font-size: 0;
                        -webkit-box-sizing: border-box;
                        -moz-box-sizing: border-box;
                        box-sizing: border-box;
                    }
                    /* Contenedor slider */
                    #slider { 
                        position: relative;
                        width: 100%;
                        padding-bottom: 35%; /* Aspect ratio */
                        overflow: hidden;
                        border:3px solid #333;
                        border-radius: 3%/5%;
                        -webkit-box-sizing: border-box;
                        -moz-box-sizing: border-box;
                        box-sizing: border-box;
                    }
                    #slider > a {
                        position:absolute;
                        top:0;
                        left:0;
                        width: 100%;
                        min-height: 100%;
                    }
                    /* Ajuste de las imágenes */
                    #slider img {
                        width: 100%;
                        min-height: 100%;
                        position: absolute;
                        margin:0;
                        padding:0; 
                        border:0;
                    }
                    /* Texto que acompaña a cada imagen */
                    #slider p {
                        position: absolute;
                        bottom: 5%;
                        left: 0;
                        display: block;
                        overflow: hidden;
                        white-space: nowrap;
                        text-overflow: ellipsis;
                        width: 80%;
                        height: 18px;
                        margin:0;
                        padding: 5px 0;
                        border-radius: 0 20px 20px 0;
                        color: #eee;
                        background: #333;
                        font-size: 18px;
                        line-height: 18px;
                        text-align:center;
                    }
                    /* Flechas de navegación */
                    a.mas, a.menos {
                        position: absolute;
                        top: 50%;
                        left: 10px;
                        z-index: 10;
                        width: 30px;
                        height: 30px;
                        text-align: center;
                        line-height: 30px;
                        font-size: 30px;
                        color: white;
                        background: #333;
                        text-decoration: none;
                    }
                    a.mas {
                        left: 100%;
                        margin-left: -40px;
                    }
                </style>

                <script>
                    $(function () {
                        $('#slider a:gt(0)').hide();
                        var interval = setInterval(changeDiv, 6000);
                        function changeDiv() {
                            $('#slider a:first-child').fadeOut(1000).next('a').fadeIn(1000).end().appendTo('#slider');
                        }
                        ;
                        $('.mas').click(function () {
                            changeDiv();
                            clearInterval(interval);
                            interval = setInterval(changeDiv, 6000);
                        });
                        $('.menos').click(function () {
                            $('#slider a:first-child').fadeOut(1000);
                            $('#slider a:last-child').fadeIn(1000).prependTo('#slider');
                            clearInterval(interval);
                            interval = setInterval(changeDiv, 6000);
                        });
                    });
                </script>
                <!------End Slider ------------>    

                <!---Start-content---->

                <center>
                    <div class="button"><span><a href="single.html">crear proyecto</a></span></div>
                </center>
                
                <!---End-content---->
                <?php $this->load->view('includes/footer'); ?>



