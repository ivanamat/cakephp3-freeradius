<?php $this->assign('title', 'Freeradius / Groups'); ?>

<?php echo $this->element('sidebar'); ?>

<main class="groups view large-9 medium-8 columns content">
    <section>
        
        <h2><?php echo $groupname; ?></h2>

        <input id="tab1" type="radio" name="tabs" checked>
        <label for="tab1"><?php echo __('Basics'); ?></label>

        <input id="tab2" type="radio" name="tabs">
        <label for="tab2"><?php echo __('Data transfer'); ?></label>

        <input id="tab3" type="radio" name="tabs">
        <label for="tab3"><?php echo __('Time'); ?></label>

        <input id="tab4" type="radio" name="tabs">
        <label for="tab4"><?php echo __('Miscelanea'); ?></label>

        <input id="tab5" type="radio" name="tabs">
        <label for="tab5"><?php echo __('Specific'); ?></label>

        <section id="content1">
            <h3><?php echo __('Basics'); ?></h3>
            <p>
                Bacon ipsum dolor sit amet beef venison beef ribs kielbasa. Sausage pig leberkas, t-bone sirloin shoulder bresaola. Frankfurter rump porchetta ham. Pork belly prosciutto brisket meatloaf short ribs.
            </p>
            <p>
                Brisket meatball turkey short loin boudin leberkas meatloaf chuck andouille pork loin pastrami spare ribs pancetta rump. Frankfurter corned beef beef tenderloin short loin meatloaf swine ground round venison.
            </p>
        </section>

        <section id="content2">
            <h3><?php echo __('Data transfer'); ?></h3>
            <p>
                Bacon ipsum dolor sit amet landjaeger sausage brisket, jerky drumstick fatback boudin ball tip turducken. Pork belly meatball t-bone bresaola tail filet mignon kevin turkey ribeye shank flank doner cow kielbasa shankle. Pig swine chicken hamburger, tenderloin turkey rump ball tip sirloin frankfurter meatloaf boudin brisket ham hock. Hamburger venison brisket tri-tip andouille pork belly ball tip short ribs biltong meatball chuck. Pork chop ribeye tail short ribs, beef hamburger meatball kielbasa rump corned beef porchetta landjaeger flank. Doner rump frankfurter meatball meatloaf, cow kevin pork pork loin venison fatback spare ribs salami beef ribs.
            </p>
            <p>
                Jerky jowl pork chop tongue, kielbasa shank venison. Capicola shank pig ribeye leberkas filet mignon brisket beef kevin tenderloin porchetta. Capicola fatback venison shank kielbasa, drumstick ribeye landjaeger beef kevin tail meatball pastrami prosciutto pancetta. Tail kevin spare ribs ground round ham ham hock brisket shoulder. Corned beef tri-tip leberkas flank sausage ham hock filet mignon beef ribs pancetta turkey.
            </p>
        </section>

        <section id="content3">
            <h3><?php echo __('Time'); ?></h3>
            <p>
                Bacon ipsum dolor sit amet beef venison beef ribs kielbasa. Sausage pig leberkas, t-bone sirloin shoulder bresaola. Frankfurter rump porchetta ham. Pork belly prosciutto brisket meatloaf short ribs.
            </p>
            <p>
                Brisket meatball turkey short loin boudin leberkas meatloaf chuck andouille pork loin pastrami spare ribs pancetta rump. Frankfurter corned beef beef tenderloin short loin meatloaf swine ground round venison.
            </p>
        </section>

        <section id="content4">
            <h3><?php echo __('Miscelanea'); ?></h3>
            <p>
                Bacon ipsum dolor sit amet landjaeger sausage brisket, jerky drumstick fatback boudin ball tip turducken. Pork belly meatball t-bone bresaola tail filet mignon kevin turkey ribeye shank flank doner cow kielbasa shankle. Pig swine chicken hamburger, tenderloin turkey rump ball tip sirloin frankfurter meatloaf boudin brisket ham hock. Hamburger venison brisket tri-tip andouille pork belly ball tip short ribs biltong meatball chuck. Pork chop ribeye tail short ribs, beef hamburger meatball kielbasa rump corned beef porchetta landjaeger flank. Doner rump frankfurter meatball meatloaf, cow kevin pork pork loin venison fatback spare ribs salami beef ribs.
            </p>
            <p>
                Jerky jowl pork chop tongue, kielbasa shank venison. Capicola shank pig ribeye leberkas filet mignon brisket beef kevin tenderloin porchetta. Capicola fatback venison shank kielbasa, drumstick ribeye landjaeger beef kevin tail meatball pastrami prosciutto pancetta. Tail kevin spare ribs ground round ham ham hock brisket shoulder. Corned beef tri-tip leberkas flank sausage ham hock filet mignon beef ribs pancetta turkey.
            </p>
        </section>

        <section id="content5">
            <h3><?php echo __('Specific'); ?></h3>
            <p>
                Bacon ipsum dolor sit amet landjaeger sausage brisket, jerky drumstick fatback boudin ball tip turducken. Pork belly meatball t-bone bresaola tail filet mignon kevin turkey ribeye shank flank doner cow kielbasa shankle. Pig swine chicken hamburger, tenderloin turkey rump ball tip sirloin frankfurter meatloaf boudin brisket ham hock. Hamburger venison brisket tri-tip andouille pork belly ball tip short ribs biltong meatball chuck. Pork chop ribeye tail short ribs, beef hamburger meatball kielbasa rump corned beef porchetta landjaeger flank. Doner rump frankfurter meatball meatloaf, cow kevin pork pork loin venison fatback spare ribs salami beef ribs.
            </p>
            <p>
                Jerky jowl pork chop tongue, kielbasa shank venison. Capicola shank pig ribeye leberkas filet mignon brisket beef kevin tenderloin porchetta. Capicola fatback venison shank kielbasa, drumstick ribeye landjaeger beef kevin tail meatball pastrami prosciutto pancetta. Tail kevin spare ribs ground round ham ham hock brisket shoulder. Corned beef tri-tip leberkas flank sausage ham hock filet mignon beef ribs pancetta turkey.
            </p>
        </section>
        
    </section>
</main>
<script type="text/javascript">
    Notification.requestPermission(function (permission) {
        var notification = new Notification('!Notificación de prueba!', {
            body: 'Esto es una simple prueba de notificaciones HTML5, en verdad es la caña y permanece el mensaje, hasta que el usuario lo cierre o hasta que se cierre mediante programación.',
            dir: 'auto',
            lang: 'es_ES',
            tag: 'demo',
            icon: 'http://wifi-manager/favicon.ico'
        });

        notification.onclick = function () {
            window.open("http://www.ivanamat.es/");
            notification.close();
        };

        setTimeout(function () {
            notification.close(); //closes the notification
        }, 30000);
    });
</script>