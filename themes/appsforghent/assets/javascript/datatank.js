$(function() { 
    /**
     * Load datasets
     */
    loadDatasets();
    
    function loadDatasets() {
        $.ajax({
            url: 'http://datatank.stad.gent/4/api/info',
            method: 'GET',
            success: function (data) {
                renderDatasets(data);
            },
            error: function (e) {
                console.log(e);
                var currentDiv = document.getElementById('datatank'); 
                var setMsg = document.createTextNode('Error loading datasets...');
                currentDiv.appendChild(setMsg);
            },
            cache: true
        });
    }
    
    function renderDatasets(data) {
        var currentDiv = document.getElementById('datatank'); 
        var themes = [];
        for(var dataset in data) {
            var theme = data[dataset].theme;
            var extractName = dataset.split('/');
            
            // Create all elements needed for the dataset cards
            var colDiv = document.createElement('div'); 
            var cardDiv = document.createElement('div'); 
            var cardSpan = document.createElement('div'); 
            var cardSubspan = document.createElement('span'); 
            var setName = document.createTextNode(extractName[1]); 
            var setType = document.createTextNode(theme);
             
            // Set required CSS classes
            colDiv.setAttribute('class', 'col-xs-12 col-sm-6 col-md-4');
            cardDiv.setAttribute('class', 'card-white dataset-card');
            cardDiv.setAttribute('data-url', dataset);
            cardDiv.setAttribute('data-theme', theme);
            cardDiv.setAttribute('title', data[dataset].description);
            cardSpan.setAttribute('class', 'data-type');
            cardSubspan.setAttribute('class', 'data-subtype');
            // Append elements to eachother and DOM
            currentDiv.appendChild(colDiv); 
            colDiv.appendChild(cardDiv);
            cardDiv.appendChild(cardSpan);
            cardSpan.appendChild(setName);
            cardSubspan.appendChild(setType);
            cardSpan.appendChild(cardSubspan);
            
            // Check for all themes in the datasets
            var f = themes.indexOf(theme);
            if(f < 0) {
                themes.push(theme);
            }
        }
        
        // Render theme categories on the left side
        var l = themes.length;
        themes.sort();
        var catP = document.getElementById('datatank-categories');

        for(var i = 0; i < l; i++) {
            var span = document.createElement('span'); 
            var cat = document.createTextNode(themes[i]);
            span.setAttribute('class', 'dataset-category-filter');
            span.appendChild(cat);
            catP.appendChild(span);
        }
        
        // Redirect to dataset on TheDatatank
        $('.dataset-card').on('click', function(el) {
            window.open('http://datatank.stad.gent/' + this.getAttribute('data-url'), '_blank');
        });
        
        // Filter datasets by category
        $('.dataset-category-filter').on('click', function(el) {
            var selectedCat = el.target.innerText;
            
            if(selectedCat == 'Alle') {
                $('.dataset-card').parent().show();
            } else {
                $('.dataset-card').parent().hide();
                var sel = $(".dataset-card[data-theme='" + selectedCat + "']");
                sel.parent().show();
            }
        });
    }
  
});