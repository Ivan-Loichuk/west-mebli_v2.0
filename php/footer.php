<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="left-footer">
                    <h2><?php echo $lang->lang_ua['footer_h2'][0]; ?></h2>
                    <p><?php echo $lang->lang_ua['footer_p'][0]; ?></p>

                    <div>
                        <a href="https://vk.com/club93836477" title="<?php echo $lang->lang_ua['footer_a_title'][0]; ?>"><i class="fa fa-vk"></i></a>
                        <a href="https://ok.ru/group/54954728423433" title="<?php echo $lang->lang_ua['footer_a_title'][1]; ?>"><i class="fa fa-odnoklassniki"></i></a>
                        <a href="https://www.facebook.com/groups/1790465037903699" title="<?php echo $lang->lang_ua['footer_a_title'][2]; ?>"><i class="fa fa-facebook-f"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="center-footer">
                    <h2><?php echo $lang->lang_ua['footer_h2'][1]; ?></h2>
                    <p><?php echo $lang->lang_ua['footer_p'][1]; ?></p>
                    <p><?php echo $lang->lang_ua['footer_p'][2]; ?></p>
                    <p><?php echo $lang->lang_ua['footer_p'][3]; ?></p>

                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="right-footer">
                    <h2><?php echo $lang->lang_ua['footer_h2'][2]; ?></h2>
                    <ul>
                        <li><a href="gallery_view.php?type=kitchen-furniture" title="<?php echo $lang->lang_ua['footer_a_title'][3]; ?>"><?php echo $lang->lang_ua['footer_a'][0]; ?></a></li>
                        <li><a href="gallery_view.php" title="<?php echo $lang->lang_ua['footer_a_title'][4]; ?>"><?php echo $lang->lang_ua['footer_a'][1]; ?></a></li>
                        <li><a href="gallery_view.php?type=other" title="<?php echo $lang->lang_ua['footer_a_title'][5]; ?>"><?php echo $lang->lang_ua['footer_a'][2]; ?></a></li>
                        <li><a href="gallery_view.php?type=children" title="<?php echo $lang->lang_ua['footer_a_title'][6]; ?>"><?php echo $lang->lang_ua['footer_a'][3]; ?></a></li>
                        <li><a href="gallery_view.php?type=office" title="<?php echo $lang->lang_ua['footer_a_title'][7]; ?>"><?php echo $lang->lang_ua['footer_a'][4]; ?></a></li>
                        <li><a href="gallery_view.php?type=bedroom" title="<?php echo $lang->lang_ua['footer_a_title'][8]; ?>"><?php echo $lang->lang_ua['footer_a'][5]; ?></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row bottom">
            <div class="col-md-2 col-sm-4 col-xs-12">
                <p>website@2017</p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <ul class="lang-ul">
                    <li class="list-gr">Language: </li>
                    <li><form class="language" action="index.php" method="post" >
                        <input name="lang_ru" type="submit" value="русский">
                        <input name="lang_ua" type="submit" value="українська">
                        </form> </li>
                </ul>

            </div>
            <div class="col-md-4 col-sm-2 col-xs-12">
                <div class="admin-btn">
                    <ul>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Admin</b> <span class="caret"></span></a>
                            <ul id="login-dp" class="dropdown-menu">
                                <li>
                                        <div class="col-md-12">
                                            <h4>Вхід(admin)</h4>
                                            <form class="form" action="login.php" method="post" id="login-nav">
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputEmail2">Логин</label>
                                                    <input type="text" class="form-control" name="log_in" placeholder="Логин" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputPassword2">Пароль</label>
                                                    <input type="password" class="form-control" name="password" placeholder="Пароль" required>

                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block" name="do_login">Вхід</button>
                                                </div>
                                                <a href="logout.php" >Вийти</a><br/>
                                            </form>
                                        </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
              </div>
            </div>
        </div>
    </div>
</footer>
