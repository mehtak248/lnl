<?php
    //set the profile data array.
    $profileData = array(
        'name'    => 'Karina Cruz',
        'image'   => 'profile.png',
        'post'    => 'President & Founder',
        'address_1' => 'La Nueva Liga LLC',
        'address_2' => '1650 Gardena Ave',
        'address_3' => 'Glendale CA',
        'phone'   => '818-334-3590',
        'email'   => 'info@LNLproductions.la',
        'website' => 'http://LNLproductions.la',
    );
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LA NUEVA LIGA Production</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <section class="banner-block" style="background-image: url('assets/images/banner.png');">
        <div class="container">
            <div class="banner-subblock">
                <div class="logo-block">
                    <a href="javascript:void(0);">
                        <img src="assets/images/logo.png" class="img-fluid" />
                    </a>
                </div>
                <div class="content-block">
                    <div class="heading-block">
                        <div class="row">
                            <div class="col-5">
                                <div class="image-block">
                                    <img src="assets/images/<?php echo (isset($profileData['image']) ? $profileData['image'] : ''); ?>" class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="details-block">
                                    <h2><?php echo (isset($profileData['name']) ? $profileData['name'] : ''); ?></h2>
                                    <h4><?php echo (isset($profileData['post']) ? $profileData['post'] : ''); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-block">
                        <div class="tab-subblock">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="vcard-tab1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Personal</a>
                                    <a class="nav-item nav-link" id="vcard-tab2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><i class="fa fa-music" aria-hidden="true"></i></a>
                                    <a class="nav-item nav-link" id="vcard-tab3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">LNL</a>
                                    <a class="nav-item nav-link" id="vcard-tab4" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">Email</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="vcard-tab1">
                                    <ul class="vcard1">
                                        <li>
                                            <div class="icon-block">
                                                <img src="assets/images/icon1.png" class="img-fluid" />
                                            </div>
                                            <a href="<?php echo (isset($profileData['website']) ? $profileData['website'] : ''); ?>"><?php echo (isset($profileData['website']) ? $profileData['website'] : ''); ?></a>
                                        </li>
                                        <li>
                                            <div class="icon-block">
                                                <img src="assets/images/icon2.png" class="img-fluid" />
                                            </div>
                                            <a href="mailto:<?php echo (isset($profileData['email']) ? $profileData['email'] : ''); ?>"><?php echo (isset($profileData['email']) ? $profileData['email'] : ''); ?></a>
                                        </li>
                                        <li class="phone">
                                            <div class="icon-block">
                                                <img src="assets/images/icon3.png" class="img-fluid" />
                                            </div>
                                            <a href="tel:<?php echo (isset($profileData['phone']) ? $profileData['phone'] : ''); ?>"><?php echo (isset($profileData['phone']) ? $profileData['phone'] : ''); ?></a>
                                        </li>
                                    </ul>
                                    <form method="post" action="manage-vcard.php" id="mangeVcard">
                                        <input type="hidden" name="action" value="create_vcard">
                                        <input type="hidden" name="image" value="<?php echo (isset($profileData['image']) ? $profileData['image'] : ''); ?>">
                                        <input type="hidden" name="name" value="<?php echo (isset($profileData['name']) ? $profileData['name'] : ''); ?>">
                                        <input type="hidden" name="post" value="<?php echo (isset($profileData['post']) ? $profileData['post'] : ''); ?>">
                                        <input type="hidden" name="address_1" value="<?php echo (isset($profileData['address_1']) ? $profileData['address_1'] : ''); ?>">
                                        <input type="hidden" name="address_2" value="<?php echo (isset($profileData['address_2']) ? $profileData['address_2'] : ''); ?>">
                                        <input type="hidden" name="address_3" value="<?php echo (isset($profileData['address_3']) ? $profileData['address_3'] : ''); ?>">
                                        <input type="hidden" name="phone" value="<?php echo (isset($profileData['phone']) ? $profileData['phone'] : ''); ?>">
                                        <input type="hidden" name="email" value="<?php echo (isset($profileData['email']) ? $profileData['email'] : ''); ?>">
                                        <input type="hidden" name="website" value="<?php echo (isset($profileData['website']) ? $profileData['website'] : ''); ?>">
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="vcard-tab2">
                                    <div class="music-block">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div style="left: 0; width: 100%; height: 380px; position: relative;">
                                                    <iframe src="https://open.spotify.com/embed/playlist/5a2OuIJ1kEttA8X3PaewlI?utm_source=oembed" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen allow="encrypted-media;"></iframe>
                                                </div>
                                            </div>
                                            <!-- 
                                            <div class="col-md-5">
                                                <div class="music-image-block">
                                                    <img src="assets/images/music.png" class="img-fluid" />
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="music-details-block">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td>Cfsn</td>
                                                                <td>2:13</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Cloud Demons</td>
                                                                <td>2:12</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Perdido</td>
                                                                <td>2:54</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Song name 4</td>
                                                                <td>2:13</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lorem ipusm</td>
                                                                <td>2:12</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Cfsn</td>
                                                                <td>2:13</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Cloud Demons</td>
                                                                <td>2:12</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Perdido</td>
                                                                <td>2:54</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Song name 4</td>
                                                                <td>2:13</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lorem ipusm</td>
                                                                <td>2:12</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>  -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="vcard-tab3">
                                    <div class="lnl-details-block">
                                        <h2><?php echo (isset($profileData['address_1']) ? $profileData['address_1'] : ''); ?> </h2>
                                        <h4><?php echo (isset($profileData['address_2']) ? $profileData['address_2'] : ''); ?> <br /><?php echo (isset($profileData['address_3']) ? $profileData['address_3'] : ''); ?></h4>
                                        <div class="lnl-link">
                                            <a href="<?php echo (isset($profileData['website']) ? $profileData['website'] : ''); ?>"><?php echo (isset($profileData['website']) ? $profileData['website'] : ''); ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="vcard-tab4">
                                    <form class="contact-form" id="frm_contact_form" method="post">
                                        <input type="hidden" name="action" value="contact_submit_details">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Your Email" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <textarea placeholder="Your Message" name="message" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group button-group">
                                            <button type="submit" id="btn_contact_submit" class="btn btn-black">Contact</button>
                                        </div>
                                        <div class="form-group button-group">
                                        <div class="alert alert-success alert-dismissible d-none" role="alert">
                                            You have successfully submitted details
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        
                                        <div class="alert alert-danger alert-dismissible d-none" role="alert">
                                            Sorry, Something went wrong.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-block">
                        <div class="footer-subblock">
                            <div class="row">
                                <div class="col-md-7">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-5">
                                    <div class="button-block">
                                        <a href="javascript:void(0);" class="btn btn-black btnDownloadVcard">DOWNLOAD VCARD</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.form.js"></script>
    <script src="assets/js/jquery.validate.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>