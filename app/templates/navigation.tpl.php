<?php if (isset($data) && !empty($data)): ?>
    <div class="wrapper nav-flex">
        <nav>
            <?php foreach ($data as $section_id => $section): ?>
                <div class="<?php print $section_id; ?>">
                    <?php foreach ($section as $nav_id => $link): ?>
                        <div class="link-wrapper <?php print ($link['active'] ?? false) ? 'active' : ''; ?>">
                            <a href="<?php print $link['url']; ?>">
                                <?php if (is_array($link['title'])): ?> 
                                    <img src="<?php print $link['title']['icon']; ?>" alt="<?php print $link['title']['alt']?>" />
                                <?php else: ?>
                                    <?php print $link['title']; ?>
                                <?php endif; ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </nav>
    </div>
<?php endif; ?>