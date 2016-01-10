jQuery(document).ready(function() {
    function showRate(LAX, SDA, SDD, JWA, LBA) {
        jQuery('#LAX').empty();
        jQuery('#SDA').empty();
        jQuery('#SDD').empty();
        jQuery('#JWA').empty();
        jQuery('#LBA').empty();
        jQuery('#LAX').append('<span>$</span>');
        jQuery('#SDA').append('<span>$</span>');
        jQuery('#SDD').append('<span>$</span>');
        jQuery('#JWA').append('<span>$</span>');
        jQuery('#LBA').append('<span>$</span>');
        jQuery('#LAX').append(LAX);
        jQuery('#SDA').append(SDA);
        jQuery('#SDD').append(SDD);
        jQuery('#JWA').append(JWA);
        jQuery('#LBA').append(LBA);
    }

    var autocompleteTerms = [];

    jQuery('.city').each(function() {
        var cityterms = jQuery(this).find('h2').text();
        autocompleteTerms.push(cityterms);
        jQuery(this).find('.zips li').each(function() {
            var zipTerms = jQuery(this).text();
            autocompleteTerms.push(zipTerms);
        });
    });

    var Database = [];

    jQuery('.city').each(function() {
        var rateMap = {
            city: null,
            zipcodes: [],
            lax: null,
            sda: null,
            sdd: null,
            jwa: null,
            lba: null
        };

        rateMap['city'] = jQuery(this).find('h2').text();

        jQuery(this).find('.zips li').each(function() {
            var zipTerms = jQuery(this).text();
            rateMap['zipcodes'].push(zipTerms);
        });

        var laxRate = jQuery(this).find('.LAX').text();
        rateMap['lax'] = laxRate;
        var sdaRate = jQuery(this).find('.SAN').text();
        rateMap['sda'] = sdaRate;
        var sddRate = jQuery(this).find('.SDD').text();
        rateMap['sdd'] = sddRate;
        var jwaRate = jQuery(this).find('.SNA').text();
        rateMap['jwa'] = jwaRate;
        var lbaRate = jQuery(this).find('.LGB').text();
        rateMap['lba'] = lbaRate;

        Database.push(rateMap);
    });
    jQuery("#tags").autocomplete({
        source: autocompleteTerms
    });
    jQuery('#rate-calculator').submit(function(event) {
        event.preventDefault();
        jQuery(Database).each(function() {
            if (this.city == jQuery('#tags').val()) {
                var lax = this.lax;
                var sda = this.sda;
                var sdd = this.sdd;
                var jwa = this.jwa;
                var lba = this.lba;
                showRate(lax, sda, sdd, jwa, lba);
            } else if (this.city != jQuery('#tags').val()) {
                var lax = this.lax;
                var sda = this.sda;
                var sdd = this.sdd;
                var jwa = this.jwa;
                var lba = this.lba;
                jQuery(this.zipcodes).each(function() {
                    if (this == jQuery('#tags').val()) {
                        showRate(lax, sda, sdd, jwa, lba);
                    }
                });
            }
        });
        if (autocompleteTerms.indexOf(jQuery('#tags').val()) == -1) {
            showRate('N/A', 'N/A', 'N/A', 'N/A', 'N/A');
        }
    });
});