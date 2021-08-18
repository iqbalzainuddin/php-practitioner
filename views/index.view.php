<?php require('partials/head.view.php'); ?>        
        <!-- 5-Separate logic from presentation code start here -->
        <!-- <header>
            <h1>
                <?//= $greeting; ?>
            </h1>
        </header> -->
        <!-- 5-Separate logic from presentation code end here -->

        <!-- 6-Array test code start here -->
        <!-- <ul> -->
            <!-- First option loop through array to print elements -->
            <!-- <?php
                // foreach ($names as $name) {
                //     echo "<li>$name</li>";
                // }
            ?> -->
            
            <!-- Second option to loop through array to print elements -->
            <!-- This option look cleaner -->
            <!-- <?php // foreach ($names as $name) : ?>
                <li><?//= $name; ?></li>
            <?php // endforeach ?>
        </ul> -->
        <!-- 6-Array test code end here -->

        <!-- 7-Associative array start here -->
        <!-- <ul>
            <?php // foreach ($person as $feature => $val) : ?>
                <li><strong><?//= $feature ?>: </strong><?//= $val; ?></li>
            <?php // endforeach ?>
        </ul> -->
        <!-- 7-Associative array end here -->

        <!-- 8-Boolean start here -->
        <!-- <ul> -->
            <!-- <?php // foreach ($task as $heading => $value) : ?>
                <li>
                    <strong> -->
                        <!-- Using ucwords() function will capitalize each word first char -->
                        <!-- <?//= ucwords($heading); ?>:
                    </strong>
                    <?//= $value; ?>
                </li>
            <?php // endforeach ?> -->
            <!-- <li>
                <strong>
                    Title:
                </strong>
                <?//= $task['title']; ?>
            </li>
            <li>
                <strong>
                    Due:
                </strong>
                <?//= $task['due']; ?>
            </li>
            <li>
                <strong>
                    Personal Responsible:
                </strong>
                <?//= $task['assigned_to']; ?>
            </li>
            <li>
                <strong>
                    Status:
                </strong>
                <?//= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
            </li> -->

            <!-- 9-Conditional start here -->
            <!-- <li>
                <strong>
                    Status:
                </strong> -->
                <!-- Another different way to use conditional -->
                <!-- <?php // if ($task['completed']) :?>
                    <span class="icon">&#9989;</span>
                <?php // else : ?>
                    <?//= 'Incomplete'; ?>
                <?php // endif ?>
            </li> -->
            <!-- 9-Conditional end here -->
        <!-- </ul> -->
        <!-- 8-Boolean end here -->

        <!-- 12- Class 101 start here -->
        <!-- <ul>
            <?php // foreach ($tasks as $task) : ?>
                <li>
                    <?php // if ($task->isCompleted()) : ?>
                        <strike>
                    <?php // endif; ?>

                    <?// = $task->Description(); ?>

                    <?php // if ($task->isCompleted()) : ?>
                        </strike>
                    <?php // endif; ?>
                </li>
            <?php // endforeach ?>
        </ul> -->
        <!-- 12- Class 101 end here -->

        <!-- 13-Intro to PDO start here -->
        <!-- Added during 16-make a router -->
        <!-- <nav>
            <ul>
                <li><a href="/">Home Page</a></li>
                <li><a href="/about/">About Page</a></li>
                <li><a href="/about/">About Culture Page</a></li>
                <li><a href="/contact/">Contact Page</a></li>
            </ul>
        </nav> -->

        <!-- <?php // require('partials/nav.view.php'); ?> -->

        <h1>My Tasks</h1>
        
        <ul>
            <?php foreach ($tasks as $task) : ?>
                <li>
                    <?php if ($task->isCompleted()) : ?>
                        <strike>
                    <?php endif; ?>

                    <?= $task->Description(); ?>

                    <?php if ($task->isCompleted()) : ?>
                        </strike>
                    <?php endif; ?>
                </li>
            <?php endforeach ?>
        </ul>
        <!-- 13-Intro to PDO end here -->

<?php require('partials/foot.view.php'); ?>