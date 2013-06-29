/**
 * JavaScript used on Special:UpdateProfile
 * Displays the "State" dropdown menu if selected country is the United States
 */
var countries = new Array();
countries[0] = {
	country: 'United States',
	name: 'State',
	sections: [
		'Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado',
		'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho',
		'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
		'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
		'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada',
		'New Hampshire', 'New Jersey', 'New Mexico', 'New York',
		'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon',
		'Pennsylvania', 'Puerto Rico', 'Rhode Island', 'South Carolina',
		'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia',
		'Washington', 'Washington, D.C.', 'West Virginia', 'Wisconsin', 'Wyoming'
	]
};

function displaySection( id, country, section ) {
	country_id = -1;
	for( var x = 0; x <= countries.length-1; x++ ) {
		if( country == countries[x].country ) {
			country_id = x;
		}
	}

	var section_select = '';
	if( countries[country_id] ) {
		document.getElementById( id + '_label' ).innerHTML = countries[country_id].name;
		section_select += '<select class="profile-form" name="' + id + '" id="' + id + '"><option></option>';
		for( x = 0; x <= countries[country_id].sections.length-1; x++ ) {
			section_select += '<option value="' + countries[country_id].sections[x] + '"' +
				( ( countries[country_id].sections[x] == section ) ? ' selected="selected"' : '' ) + '>' + countries[country_id].sections[x] + '</option>';
		}
		section_select += '</select>';
	}

	document.getElementById( id + '_form' ).innerHTML = section_select;
}

mw.loader.using( 'jquery.ui.datepicker', function() {
	jQuery( function( jQuery ) {
		jQuery( '#birthday' ).datepicker({
			changeYear: true,
			yearRange: '1930:c',
			dateFormat: jQuery( '#birthday' ).hasClass( 'long-birthday' ) ? 'mm/dd/yy' : 'mm/dd'
		});
	});
});