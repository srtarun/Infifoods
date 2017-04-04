<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Deals' name='deals' clonable='1' executable='0'>

<cms:editable name='deal_details' type='text'/>

<cms:editable name='deal_image'
crop='1'
width='368'
height='256'
type='image' 
/>

</cms:template>



<?php COUCH::invoke(); ?>