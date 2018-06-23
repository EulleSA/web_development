function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -5.7792569, lng: -35.200916},
      zoom: 12
    });

    var layer = new google.maps.FusionTablesLayer({
      query: {
        select: 'geometry',
        from: '1ertEwm-1bMBhpEwHhtNYT47HQ9k2ki_6sRa-UQ'
      },
      styles: [{
        polygonOptions: {
          fillColor: '#00FF00',
          fillOpacity: 0.3
        }
      }, {
        where: 'birds > 300',
        polygonOptions: {
          fillColor: '#0000FF'
        }
      }, {
        where: 'population > 5',
        polygonOptions: {
          fillOpacity: 1.0
        }
      }]
    });
    layer.setMap(map);
  }