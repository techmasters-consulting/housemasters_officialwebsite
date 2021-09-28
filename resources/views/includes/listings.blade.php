<div id="news" class=" pos-zindex-10 py-4 py-lg-6">
        <div class="container">
        

            <div class="text-center mb-6 mb-0">
              <img width="105"
                         src="assets/img/LOGO.png" alt=""/>
                <h2 class="h1 font-weight-bold mb-3 text-black">
                    Search our listings
                </h2>
                <p class="text-dark op-7">
                    Put in your Search Criteria
                </p>
       
          
            <div class="modal-body">
                <p id="note">Tell us what you are looking for and leave the rest to us..</p>
                <div class="alert">Thats it!, we would contact you ASAP. If its urgent, call Shanon on: +230 58535515</div>

                <form id="requestForm" target="_self" method="POST" action="" onSubmit="return postToGoogle();">
                    <div class="form-row">
                        <div class="form-group col-md-6">

                            <select id="inputWho" required class="custom-select my-1 mr-sm-2 form-control-rounded">
                                <option selected  value="">I am</option>
                                <option value="a Student">a Student
                                </option>
                                <option value="an Expat">an Expat
                                </option>
                                <option value="a Solo Travele">a Solo Traveler
                                </option>
                                <option value="a Couple">a Couple
                                </option>
                                <option value="a Family">a Family
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">

                            <select id="inputWhat" required class="custom-select my-1 mr-sm-2 form-control-rounded">
                                <option selected  value="">Looking For</option>
                                <option value="a Room in a shared Apartment">a Room in a shared Apartment
                                </option>
                                <option value="a Studio">a Studio
                                </option>
                                <option value="an Apartment">an Apartment
                                </option>
                                <option value="n Individual House">an Individual House
                                </option>
                                <option value="a Land">a Land
                                </option>
                            </select>
                        </div>


                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-6">

                            <select id="inputLength" required class="custom-select my-1 mr-sm-2 form-control-rounded">
                                <option selected value="">Duration</option>
                                <option value="Rent For 1 - 3 Months">Rent For 1 - 3 Months
                                </option>
                                <option value="Rent For 3 - 6 Months">Rent For 3 - 6 Months
                                </option>
                                <option value="Rent For 6 - 12 Months">Rent For 6 - 12 Months
                                </option>
                                <option value="Rent For Long Term">Rent For Long Term
                                </option>
                                <option value="Buy">Buy
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">

                            <select id="inputWhere" required class="custom-select my-1 mr-sm-2 form-control-rounded">
                                <option selected  value="">In the Region of</option>
                                <option value="16eme Mille">16eme Mille</option>
                                <option value="Agalega">Agalega</option>
                                <option value="Albion">Albion</option>
                                <option value="Amitie Gokhoola">Amitie Gokhoola</option>
                                <option value="Arsenal">Arsenal</option>
                                <option value="Baie Du Cap">Baie Du Cap</option>
                                <option value="Bambous">Bambous</option>
                                <option value="Bambous Virieux">Bambous Virieux</option>
                                <option value="Bananes ">Bananes </option>
                                <option value="Beau Bassin">Beau Bassin</option>
                                <option value="Beau Vallon">Beau Vallon</option>
                                <option value="Bel Air">Bel Air</option>
                                <option value="Bel Ombre">Bel Ombre</option>
                                <option value="Benares">Benares</option>
                                <option value="Black River">Black River</option>
                                <option value="Bois Cheri">Bois Cheri</option>
                                <option value="Bois Des Amourettes">Bois Des Amourettes</option>
                                <option value="Bon Accueil">Bon Accueil</option>
                                <option value="Bramsthan">Bramsthan</option>
                                <option value="Brisee Verdiere">Brisee Verdiere</option>
                                <option value="Britannia">Britannia</option>
                                <option value="Calebasses">Calebasses</option>
                                <option value="Camp Carol">Camp Carol</option>
                                <option value="Camp De Masque">Camp De Masque</option>
                                <option value="Camp De Masque Pave">Camp De Masque Pave</option>
                                <option value="Camp Diable">Camp Diable</option>
                                <option value="Camp Ithier">Camp Ithier</option>
                                <option value="Cap Malheureux">Cap Malheureux</option>
                                <option value="Cascavelle">Cascavelle</option>
                                <option value="Case Noyale">Case Noyale</option>
                                <option value="Central Flacq">Central Flacq</option>
                                <option value="Chamarel">Chamarel</option>
                                <option value="Chamouny">Chamouny</option>
                                <option value="Chemin Grenier">Chemin Grenier</option>
                                <option value="Clemencia">Clemencia</option>
                                <option value="Cluny">Cluny</option>
                                <option value="Congomah">Congomah</option>
                                <option value="Cottage">Cottage</option>
                                <option value="Creve Coeur">Creve Coeur</option>
                                <option value="Curepipe">Curepipe</option>
                                <option value="D'Epinay">D'Epinay</option>
                                <option value="Dagotiere">Dagotiere</option>
                                <option value="Dubreuil">Dubreuil</option>
                                <option value="Eau Coulee">Eau Coulee</option>
                                <option value="Ebene">Ebene</option>
                                <option value="Ecroignard">Ecroignard</option>
                                <option value="Flic en Flac">Flic en Flac</option>
                                <option value="Fond du Sac">Fond du Sac</option>
                                <option value="FOREST - SIDE">FOREST - SIDE</option>
                                <option value="G.R.S.E">G.R.S.E</option>
                                <option value="Goodlands">Goodlands</option>
                                <option value="Grand Bay">Grand Bay</option>
                                <option value="Grand Bel Air">Grand Bel Air</option>
                                <option value="Grand Bois">Grand Bois</option>
                                <option value="Grand Gaube">Grand Gaube</option>
                                <option value="Grand Sable">Grand Sable</option>
                                <option value="Grande Retraite">Grande Retraite</option>
                                <option value="Gros Cailloux">Gros Cailloux</option>
                                <option value="L'Avenir">L'Avenir</option>
                                <option value="L'Escalier">L'Escalier</option>
                                <option value="L'Esperance">L'Esperance</option>
                                <option value="L'Esperance Trebuchet">L'Esperance Trebuchet</option>	<option value="La Flora">La Flora</option>
                                <option value="La Gaulette">La Gaulette</option>
                                <option value="La Laura / Malenga">La Laura / Malenga</option>
                                <option value="Lalmatie">Lalmatie</option>
                                <option value="Laventure">Laventure</option>
                                <option value="Le Hochet">Le Hochet</option>
                                <option value="Le Morne">Le Morne</option>
                                <option value="Long Mountain">Long Mountain</option>
                                <option value="Mahebourg">Mahebourg</option>
                                <option value="Mapou">Mapou</option>
                                <option value="Mare D'Albert">Mare D'Albert</option>
                                <option value="Mare La Chaux">Mare La Chaux</option>
                                <option value="Mare Tabac">Mare Tabac</option>
                                <option value="Medine Camp de Masque">Medine Camp de Masque</option>
                                <option value="Melrose">Melrose</option>
                                <option value="Midlands">Midlands</option>
                                <option value="Moka">Moka</option>
                                <option value="Montagne Blanche">Montagne Blanche</option>
                                <option value="Morc St Andre ">Morc St Andre </option>
                                <option value="New Grove">New Grove</option>
                                <option value="Notre Dame">Notre Dame</option>
                                <option value="Nouvelle Decouverte">Nouvelle Decouverte</option>
                                <option value="Nouvelle France">Nouvelle France</option>
                                <option value="Old Grand Port">Old Grand Port</option>
                                <option value="Olivia">Olivia</option>
                                <option value="Pamplemousses">Pamplemousses</option>
                                <option value="Petit Bel Air">Petit Bel Air</option>
                                <option value="Petit Raffray">Petit Raffray</option>
                                <option value="Petite Riviere">Petite Riviere</option>
                                <option value="Phoenix">Phoenix</option>
                                <option value="Piton">Piton</option>
                                <option value="Plaine des Papayes">Plaine des Papayes</option>
                                <option value="Plaine Magnien">Plaine Magnien</option>
                                <option value="Pointe aux Piments">Pointe aux Piments</option>
                                <option value="Pointe aux Sables">Pointe aux Sables</option>
                                <option value="PORT LOUIS">PORT LOUIS</option>
                                <option value="Poste de Flacq">Poste de Flacq</option>
                                <option value="Poudre D'Or Hamlet">Poudre D'Or Hamlet</option>
                                <option value="Poudre D'Or Village">Poudre D'Or Village</option>
                                <option value="Providence">Providence</option>
                                <option value="Quartier Militaire">Quartier Militaire</option>
                                <option value="QUATRE BORNES">QUATRE BORNES</option>
                                <option value="Quatre Cocos">Quatre Cocos</option>
                                <option value="Quatre Soeurs">Quatre Soeurs</option>
                                <option value="Queen Victoria ">Queen Victoria </option>
                                <option value="Reduit">Reduit</option>
                                <option value="Richelieu">Richelieu</option>
                                <option value="Ripailles">Ripailles</option>
                                <option value="Riviere des Anguilles">Riviere des Anguilles</option>
                                <option value="Riviere des Creoles">Riviere des Creoles</option>
                                <option value="Riviere du Poste">Riviere du Poste</option>
                                <option value="Riviere du Rempart">Riviere du Rempart</option>
                                <option value="Roche Terre">Roche Terre</option>
                                <option value="Roches Noires">Roches Noires</option>
                                <option value="Rodrigues - Grand Montagne">Rodrigues - Grand Montagne</option>
                                <option value="Rodrigues - La Ferme">Rodrigues - La Ferme</option>
                                <option value="Rodrigues - Mont Lubin">Rodrigues - Mont Lubin</option>
                                <option value="Rodrigues - Port Mathurin">Rodrigues - Port Mathurin</option>
                                <option value="Rodrigues - Riviere Coco">Rodrigues - Riviere Coco</option>
                                <option value="Rose Belle">Rose Belle</option>
                                <option value="Rose- Hill">Rose- Hill</option>
                                <option value="Saint Julien d'Hotman">Saint Julien d'Hotman</option>
                                <option value="Saint Julien Village">Saint Julien Village</option>
                                <option value="Saint Pierre">Saint Pierre</option>
                                <option value="Sebastopol">Sebastopol</option>
                                <option value="Souillac">Souillac</option>
                                <option value="St Hubert">St Hubert</option>
                                <option value="Surinam">Surinam</option>
                                <option value="Tamarin">Tamarin</option>
                                <option value="Terre Rouge">Terre Rouge</option>
                                <option value="The Vale">The Vale</option>
                                <option value="Tombeau Bay">Tombeau Bay</option>
                                <option value="Triolet">Triolet</option>
                                <option value="Trois Boutiques">Trois Boutiques</option>
                                <option value="Trou aux Biches">Trou aux Biches</option>
                                <option value="Trou D'Eau Douce">Trou D'Eau Douce</option>
                                <option value="Tyack">Tyack</option>
                                <option value="Union Ducray / St Aubin">Union Ducray / St Aubin</option>
                                <option value="Union Park">Union Park</option>
                                <option value="Vacoas / Floreal">Vacoas / Floreal</option>
                                <option value="Verdun">Verdun</option>
                                <option value="Ville Bague">Ville Bague</option>
                            </select>
                        </div>
                    </div>


<meta name="csrf-token" content="{{ csrf_token() }}">


                    
                    


                    <div class="modal-footer border-0">
                        <button id="Submit" class="btn btn-blue btn-block btn-flat btn-bold btn-rounded py-3">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
            <div class="container mb-6 ">
       

  <div class="card">
    <div class="card-header">
      <img src="https://images.unsplash.com/photo-1595222016771-1843541fa718?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1053&q=80" alt="rover" />
    </div>
    <div class="card-body">
      <span class="tag tag-teal">Tamarin</span>
      <h4>
      3bedroom Aparment in flic, with 3 baths
      </h4>
      <p>
       design  An exploration into the truck's polarising design  An exploration into the truck's polarising design  An exploration into the truck's polarising design  
      </p>
      <div class="user">
     
        <div class="user-info">
          <h5>July Dec</h5>
          <small>2h ago</small>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <img src="https://images.unsplash.com/photo-1628745277895-106fbff3caf7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" alt="ballons" />
    </div>
    <div class="card-body">
      <span class="tag tag-purple">Flic en flac</span>
      <h4>
       2bedroom Aparment in flic, with private pool
      </h4>
      <p>
        The future can be scary, but there are ways to
        deal with that fear.The future can be scary, but there are ways to
        deal with that fear.
      </p>
      <div class="user">
      
        <div class="user-info">
          <h5>Eyup Ucmaz</h5>
          <small>Yesterday</small>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <img src="https://images.unsplash.com/photo-1437751695201-298be97a82a8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1136&q=80" alt="city" />
    </div>
    <div class="card-body">
      <span class="tag tag-pink">Flic en flac</span>
      <h4>
       1 bedroom Studio, Modern
      </h4>
      <p>
        Dashboard Design Guidelines     Dashboard Design Guidelines     Dashboard Design Guidelines     Dashboard Design Guidelines    Dashboard Design Guidelines     
      </p>
      <div class="user">
        
        <div class="user-info">
          <h5>25000</h5>
          <small>1w ago</small>
        </div>
      </div>
    </div>
  </div>
            
  <div class="card">
    <div class="card-header">
      <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1074&q=80" alt="rover" />
    </div>
    <div class="card-body">
      <span class="tag tag-teal">Tamarin</span>
      <h4>
        Why is the Tesla Cybertruck designed the way it
        is?
      </h4>
      <p>
        An exploration into the truck's polarising design
      </p>
      <div class="user">
        <img src="https://yt3.ggpht.com/a/AGF-l7-0J1G0Ue0mcZMw-99kMeVuBmRxiPjyvIYONg=s900-c-k-c0xffffffff-no-rj-mo" alt="user" />
        <div class="user-info">
          <h5>July Dec</h5>
          <small>2h ago</small>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <img src="https://images.unsplash.com/photo-1591474200742-8e512e6f98f8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1074&q=80" alt="ballons" />
    </div>
    <div class="card-body">
      <span class="tag tag-purple">Rosehill</span>
      <h4>
        How to Keep Going When You Don’t Know What’s Next
      </h4>
      <p>
        The future can be scary, but there are ways to
        deal with that fear.
      </p>
      <div class="user">
        <img src="https://lh3.googleusercontent.com/ogw/ADGmqu8sn9zF15pW59JIYiLgx3PQ3EyZLFp5Zqao906l=s32-c-mo" alt="user" />
        <div class="user-info">
          <h5>Eyup Ucmaz</h5>
          <small>Yesterday</small>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <img src="https://images.unsplash.com/photo-1628744876497-eb30460be9f6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" alt="city" />
    </div>
    <div class="card-body">
      <span class="tag tag-pink">Grand Bay</span>
      <h4>
        10 Rules of Dashboard Design
      </h4>
      <p>
        Dashboard Design Guidelines
      </p>
      <div class="user">
        <img src="https://studyinbaltics.ee/wp-content/uploads/2020/03/3799Ffxy.jpg" alt="user" />
        <div class="user-info">
          <h5>Carrie Brewer</h5>
          <small>1w ago</small>
        </div>
      </div>
    </div>
  </div>
        </div>
    </div>