<script src="/makeweb/assets/js/jquery.min.js"></script>
<script src="/makeweb/dist/coreNavigation-1.1.3.min.js"></script>
<script src="/makeweb/assets/js/jquery.bpopup.min.js"></script>
<script>
    $('nav').coreNavigation({
        menuPosition: "right",
        container: true,
        responsideSlide: true
    });

    $('#login').click(function() {
        $('#element_to_pop_up').bPopup();
    });

    $('#upload').click(function() {
        $('#upload_to_pop_up').bPopup();
    });
</script>