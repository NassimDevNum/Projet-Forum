<div id="footer-wrapper">
    <footer id="footer" class="container">
        <div class="row">
            <div class="3u 6u(medium) 12u$(small)">

                <!-- Links -->
                <section class="widget links">
                    <h3>Mentions légales</h3>
                </section>

            </div>
            <div class="3u 6u$(medium) 12u$(small)">

                <!-- Links -->
                <section class="widget links">
                    <h3>Besoin d'aide?</h3>
                </section>

            </div>
            <div class="3u 6u(medium) 12u$(small)">

                <!-- Links -->
                <section class="widget contact">
                    <h3>Nous suivre</h3>
                    <ul>
                        <li><a href="https://www.facebook.com/neige.soleil.5" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="https://www.instagram.com/neigeandsoleil/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    </ul>
                </section>

            </div>
            <div class="3u 6u$(medium) 12u$(small)">

                <!-- Contact -->
                <section class="widget contact">
                    <h3>Nous contacter</h3>
                    <ul>
                        <li><p><b>neigeandsoleil@gmail.com</b></p></li>
                        <li><p><b>0250962043</b></p></li>
                    </ul>
                </section>

            </div>
        </div>
        <div style="text-align: center;font-weight: 700;">
            <p style="margin-bottom: 0.5em;">
                Copyright : 2022 | Neige & Soleil
            </p>
        </div>
    </footer>
</div>

<div class="modal fatmodal" id="modalcontacter" tabindex="-1" role="dialog"
     aria-labelledby="modalDisplayProductLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDisplayProductLabel">poster votre commentaire</h5>
            </div>
            <div style='max-height: 800px;overflow: auto !important;' class="modal-body">
                <form method="post" class="navbar-form navbar-left">
                    <textarea name = "mailText" id="contact_area" class="form-control"></textarea>
                    <div style="display: inline-block; float: right;margin: 2% 0%;" class="form-group ">
                        <input style="padding: 0.4em 0.8em;font-size: inherit;" type="submit" class="form-control"
                               name = "mailsubmit" value="Envoyer">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<div class="modal fatmodal" id="modalinformation" tabindex="-1" role="dialog"
     aria-labelledby="modalDisplayProductLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDisplayProductLabel">Les Réservations</h5>
            </div>
            <div style='max-height: 800px;overflow: auto !important;' class="modal-body">
                <div id="tableau_contrats">
                <div id="tableau_contrats" style="">
                    <table class="table" >
                        <thead class="thead-dark">
                        <tr>
                            <th colspan="2" scope="col"> DATE DE DEBUT</th>
                            <th colspan="2" scope="col">DATE DE FIN</th>
                            <th scope="col">Reference</th>
                        </tr>
                        </thead>
                        <tbody id = "bodyInfo">
                        <tr class='table-success'>
                            <td>2</td>
                            <td>2022/04/01</td>
                            <td>2022/04/05</td>
                        </tr>
                        <tr class='table-success'>
                            <td>2</td>
                            <td>2022/04/01</td>
                            <td>2022/04/05</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<div class="modal fatmodal" id="modalinformationEqui" tabindex="-1" role="dialog"
     aria-labelledby="modalDisplayProductLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDisplayProductLabel">Les Réservations</h5>
            </div>
            <div style='max-height: 800px;overflow: auto !important;' class="modal-body">
                <div id="tableau_contrats">
                    <div id="tableau_contrats" style="">
                        <table class="table" >
                            <thead class="thead-dark">
                            <tr>
                                <th colspan="2" scope="col"> Réference de réservation</th>
                                <th colspan="2" scope="col">Quantité</th>
                            </tr>
                            </thead>
                            <tbody id = "bodyInfoEqui">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>