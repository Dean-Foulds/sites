$pages = ['donation-thank-you'];

    if ((isset($_SESSION["donation"])) && (in_array($post->post_name, $pages))) {
        //if ($_SERVER['REMOTE_ADDR'] == '81.138.12.16') {

            if($_SESSION["donation"]['transactionProducts'][0]['sku'] == 'card-one-off-payment') {
                ?>

                <!-- Begin TVSquared Tracking Code -->
                <script type="text/javascript">
                    var _tvq = window._tvq = window._tvq || [];
                    (function () {
                        var session = {
                            'user': '<?php echo $_SESSION["donation"]['transactionId'];?>'
                        };
                        var actionname = 'donation';
                        var action = {
                            'rev': '<?php echo $_SESSION["donation"]['transactionTotal'];?>',
                            'prod': '<?php echo $_SESSION["donation"]['transactionProducts'][0]['sku'];?>',
                            'id': '<?php echo $_SESSION["donation"]['transactionId'];?>',
                            'promo': ''
                        };

                        var u = (("https:" == document.location.protocol) ? "https://collector-1442.tvsquared.com/" : "http://collector-1442.tvsquared.com/");
                        _tvq.push(['setSiteId', "TV-81545472-1"]);
                        _tvq.push(['setTrackerUrl', u + 'tv2track.php']);
                        _tvq.push([function () {
                            this.setCustomVariable(5, 'session', JSON2.stringify(session), 'visit')
                        }]);
                        _tvq.push([function () {
                            this.setCustomVariable(5, actionname, JSON2.stringify(action), 'page')
                        }]);
                        _tvq.push(['trackPageView']);
                        var d = document,
                            g = d.createElement('script'),
                            s = d.getElementsByTagName('script')[0];
                        g.type = 'text/javascript';
                        g.defer = true;
                        g.async = true;
                        g.src = u + 'tv2track.js';
                        s.parentNode.insertBefore(g, s);
                    })();
                </script>

                <?php
            }
        //}
    }
    ?>