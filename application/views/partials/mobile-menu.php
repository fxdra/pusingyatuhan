            <div class="mobile-nav-wrapper" role="navigation">
                <div class="closemobileMenu">Close Menu <i class="icon anm anm-times-l"></i></div>
                <ul id="MobileNav" class="mobile-nav">
                <?php foreach($menu as $item): ?>
                    <?php if(isset($item['children']) && !empty($item['children'])): ?>
                        <li class="lvl1 parent dropdown"><a href="<?=$item['url'];?>"><?=$item['title'];?> <i class="icon anm anm-angle-down-l"></i></a>
                            <ul class="dropdown">
                            <?php foreach($item['children'] as $child): ?>
                                <li><a href="<?=$child['url'];?>" class="site-nav"><?=$child['title'];?></i></a></li>
                            <?php endforeach; ?>
                            </ul>
                    <?php else: ?>
                        <li class="lvl1 parent"><a href="<?=$item['url'];?>"><?=$item['title'];?></i></a></li>
                    <?php endif; ?>
                <?php endforeach; ?>
                </ul>
            </div>