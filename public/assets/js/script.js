function autocomplete(inp, arr) {
    /*la fonction de saisie semi-automatique prend deux arguments,
    l'élément de champ de texte et un tableau de valeurs possibles en saisie semi-automatique :*/
    var currentFocus;
    /*exécute une fonction quand quelqu'un écrit dans le champ texte :*/
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        /*ferme toutes les listes déjà ouvertes de valeurs complétées automatiquement*/
        closeAllLists();
        if (!val) { return false;}
        currentFocus = -1;
        /*créer un élément DIV qui contiendra les items (valeurs) :*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*ajoute l'élément DIV en tant qu'enfant du conteneur de saisie semi-automatique :*/
        this.parentNode.appendChild(a);
        /*pour chaque élément du tableau...*/
        for (i = 0; i < arr.length; i++) {
          /*vérifie si l'élément commence par les mêmes lettres que la valeur du champ de texte :*/
          if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
            /*créer un élément DIV pour chaque élément correspondant :*/
            b = document.createElement("DIV");
            /*met les lettres correspondantes en gras :*/
            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
            b.innerHTML += arr[i].substr(val.length);
            /*insérer un champ d'entrée qui contiendra la valeur de l'élément de tableau actuel :*/
            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
            /*exécute une fonction lorsque quelqu'un clique sur la valeur de l'élément (élément DIV) :*/
            b.addEventListener("click", function(e) {
                /*insérer la valeur du champ de texte de saisie semi-automatique :*/
                inp.value = this.getElementsByTagName("input")[0].value;
                /*ferme la liste des valeurs complétées automatiquement,
                (ou toute autre liste ouverte de valeurs complétées automatiquement :*/
                closeAllLists();
            });
            a.appendChild(b);
            }
        }
    });
    /*exécute une fonction appuie sur une touche du clavier :*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
            /*Si la touche fléchée vers le BAS est enfoncée,
            augmenter la variable currentFocus :*/
          currentFocus++;
          /*et rend l'élément courant plus visible :*/
          addActive(x);
        } else if (e.keyCode == 38) { //en haut
            /*Si la touche fléchée HAUT est enfoncée,
            diminuer la variable currentFocus :*/
          currentFocus--;
          /*et rend l'élément courant MOIN visible :*/
          addActive(x);
        } else if (e.keyCode == 13) {
         /*Si la touche ENTER est enfoncée, empêche la soumission du formulaire,*/
          e.preventDefault();
          if (currentFocus > -1) {
            /*et simuler un clic sur l'item "actif" :*/
            if (x) x[currentFocus].click();
          }
        }
    });
    function addActive(x) {
      /*une fonction pour classer un élément comme "actif":*/
      if (!x) return false;
      /*commencer par supprimer la classe "active" sur tous les éléments :*/
      removeActive(x);
      if (currentFocus >= x.length) currentFocus = 0;
      if (currentFocus < 0) currentFocus = (x.length - 1);
      /*ajouter la classe "autocomplete-active":*/
      x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
      /*une fonction pour supprimer la classe "active" de tous les éléments de saisie semi-automatique :*/
      for (var i = 0; i < x.length; i++) {
        x[i].classList.remove("autocomplete-active");
      }
    }
    function closeAllLists(elmnt) {
      /*ferme toutes les listes de saisie semi-automatique dans le document,
      sauf celui passé en argument :*/
      var x = document.getElementsByClassName("autocomplete-items");
      for (var i = 0; i < x.length; i++) {
        if (elmnt != x[i] && elmnt != inp) {
          x[i].parentNode.removeChild(x[i]);
        }
      }
    }
    /*exécute une fonction quand quelqu'un clique dans le document :*/
    document.addEventListener("click", function (e) {
        closeAllLists(e.target);
    });
  }
  
  /*Un tableau contenant tous les noms des acteurs :*/
  var actor = ['moi'];
  var director = ['henri']
  /*lance la fonction de saisie semi-automatique sur l'élément "actor" et transmet le tableau des acteurs comme valeurs de saisie 
  semi-automatique possibles :*/
  autocomplete(document.getElementById("actor"), actor);
  autocomplete(document.getElementById("director"), director);