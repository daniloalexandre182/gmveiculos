    <!-- footer -->
    <footer>
        <!-- desktop -->
        <div class="container-fluid text-white d-none d-lg-block">
            <div class="row d-flex justify-content-center p-4">
                <!-- logo -->
                <div class="col-12 col-lg-3 my-auto">
                    <img src="img/logo-footer.png" alt="logo" class="rounded mx-auto d-block">
                </div>
                <!-- //logo -->
                <!-- contato -->
                <div class="col-12 col-lg-3 text-center my-auto">
                    <h2>CONTATO</h2>
                    <p>WhatsApp:</p>
                    <p><a href="http://api.whatsapp.com/send?1=pt_BR&phone=5513997368677" class="link-whatsapp">(13)99736-8677</a></p>
                    <br>
                    <p>instagram:</p>
                    <p><a href="https://www.instagram.com/gm_veiculo/" target="_blank" class="text-white link-instagram">@gm_veiculo</a></p>
                </div>
                <!-- //contato -->
            </div>
        </div>
        <!-- //desktop -->

        <!-- mobile -->
        <div class="container-fluid text-white d-lg-none">
            <div class="row d-flex justify-content-center pt-4 pb-4">
                <!-- logo -->
                <div class="col-12 col-lg-2 pb-4 border-bottom border-dark">
                    <img src="img/logo-footer.png" alt="logo" class="rounded mx-auto d-block">
                </div>
                <!-- //logo -->
                <!-- contato -->
                <div class="col-12 col-lg-3 text-center py-4 border-bottom border-dark">
                    <h2>CONTATO</h2>
                    <p>WhatsApp:</p>
                    <p><a href="http://api.whatsapp.com/send?1=pt_BR&phone=5513997368677" class="link-whatsapp">(13)99736-8677</a></p>
                    <br>
                    <p>instagram:</p>
                    <p><a href="https://www.instagram.com/gm_veiculo/" target="_blank" class="text-white">@gm_veiculo</a></p>
                </div>
                <!-- //contato -->
                <!-- redes sociais -->
                <div class="col-12 col-lg-1 py-4 border-bottom border-dark">
                    <div class="row d-flex justify-content-center">
                        <div class="col-2 col-lg-12 text-center">
                            <a href="https://www.instagram.com/gmveiculo/" class="mx-1" target="_blank"><i class="fab fa-instagram"  aria-hidden="true"></i></a>
                        </div>
                        <div class="col-2 col-lg-12 text-center">
                            <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5513997368677/" class="mx-1" target="_blank"><i class="fab fa-whatsapp icon-whatsapp"  aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!-- //redes sociais -->
            </div>
        </div>
        <!-- //mobile -->
        
        <div id="desenvolvedor" class="container-fluid text-white d-flex justify-content-center p-1 border-top border-dark">
            <p class="text-center">Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> Todos os direitos reservados |
                        Desenvolvido por <a href="https://www.daniloalexandre.com"
                            target="_blank">Danilo Machado</a>
            </p>
        </div>
    </footer>
    <!-- /footer-->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- ancora-suave -->
    <script>
        var $doc = $('html, body');
        $('#ancora a').click(function() {
            $doc.animate({
                scrollTop: $( $.attr(this, 'href') ).offset().top
            }, 500);
            return false;
        });
    </script>
    <!-- ancora scroll -->
    <script>
        $(document).scroll(function(){
            if ($(this).scrollTop() > 400) {
                $("#ancora").addClass("d-lg-flex")
            }
            else{
                $("#ancora").removeClass("d-lg-flex")
            }
        });
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>