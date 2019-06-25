
// #############################################
// ################# SCROLL ####################
// #############################################

const appli = {
    SELECTOR: {
        elActu: document.querySelector('#actu'),
        elVinyles: document.querySelector('#vinyles')
    },

    PROPERTIES: {
        urlApiRest: '',
        categoryID: '',
        postPerPage: 9,
        offset: 0,
        totalPage: 0,
        currentPage: 1,
        etatScroll: false
    },

    EVENT : {
        defile : function(){
            document.addEventListener('scroll', function(){
                appli.displayPosts();
            })
        },
        defileVinyles : function(){
            document.addEventListener('scroll', function(){
                appli.displayVinyles();
            })
        }
    },

    init: function () {
        if (this.SELECTOR.elActu !== null) {
            this.PROPERTIES.urlApiRest = this.SELECTOR.elActu.dataset.url;
            //dataset recupere la propriété data de l'html
            this.PROPERTIES.categoryID = this.SELECTOR.elActu.dataset.categoryid;
            if (this.PROPERTIES.urlApiRest !== '' && !isNaN(this.PROPERTIES.categoryID)) {
                this.infiniteScrollActu();
                this.EVENT.defile();
            }
        }

        if(this.SELECTOR.elVinyles !== null ) {
            this.PROPERTIES.urlApiRest = this.SELECTOR.elVinyles.dataset.url;
            //dataset recupere la propriété data de l'html
            
            if (this.PROPERTIES.urlApiRest !== '') {
                this.infiniteScrollVinyles();
                this.EVENT.defileVinyles();
            }
        }


    },
    infiniteScrollActu: async function () {
        this.PROPERTIES.offset = (this.PROPERTIES.currentPage - 1) * this.PROPERTIES.postPerPage;
        response = await fetch(this.PROPERTIES.urlApiRest + '?_embed=true&per_page=' + this.PROPERTIES.postPerPage + '&offset=' + this.PROPERTIES.offset+'&categories='+this.PROPERTIES.categoryID);
        this.PROPERTIES.totalPage = response.headers.get('X-WP-TotalPages')
        data = await response.json();
        if (data.length > 0) {
            for (post of data) {
                console.log(post);
                                if( post.featured_media!== 0 ){
                    dispImg = `<img src="${post._embedded['wp:featuredmedia'][0].media_details.sizes.medium.source_url}" class="card-img-top"></img>`;
                }else{
                    dispImg = `<img src="https://placeholder.com/400/400" class="card-img-top"></img>`;
                }
                this.SELECTOR.elActu.innerHTML += `
               <div class="img_actu xs-col-12 sm-col-12 md-col-3 lg-col-3 xl-col-3">
                 ${dispImg}
                        </div>
                 <div class="content_post sm-col-12 xs-col-12 md-offset-1 md-col-8 lg-offset-1 lg-col-8 xl-offset-1 xl-col-8">
                        <p class="titre_article_actu">${post.title.rendered}</p>
                        <p>${post.content.rendered}</p>
                        <p> Publié le ${post.date.substr(-20, 10)} </p>
                        <div class="underline_actu"></div>
                        </div>
                 `
            }
            this.PROPERTIES.currentPage += 1;
            this.PROPERTIES.etatScroll = false;

        }
    },

        infiniteScrollVinyles: async function () {
        this.PROPERTIES.offset = (this.PROPERTIES.currentPage - 1) * this.PROPERTIES.postPerPage;
        response = await fetch(this.PROPERTIES.urlApiRest + '?_embed=true&per_page=' + this.PROPERTIES.postPerPage + '&offset=' + this.PROPERTIES.offset);
        this.PROPERTIES.totalPage = response.headers.get('X-WP-TotalPages')
        data = await response.json();
        if (data.length > 0) {
            for (post of data) {
                console.log(post);
                if( post.featured_media!== 0 ){
                    dispImg = `<img src="${post._embedded['wp:featuredmedia'][0].media_details.sizes.medium.source_url}" height="200" width="200"></img>`;
                }else{
                    dispImg = `<img src="https://placeholder.com/400/400" class="card-img-top"></img>`;
                }
                this.SELECTOR.elVinyles.innerHTML += `

                <div class="row titre_article">
                    <p> ${post.title.rendered}</p>
				</div>
				<div class="row articles">
					<div class="img_article">${dispImg}</div>
                    <div class="extrait_article">
                    <p>${post.excerpt.rendered}
                    <span> Publié le : 
                        ${post.date.substring(8,10)}/${post.date.substring(5,7)}/${post.date.substring(0,4)}
                    </span></p>
                    
                    </div>
				</div>
				<div class="link_article">
				    <a href="${post.guid.rendered}"> > Lire l'article complet </a>
				    <a href="#"> > Haut de page </a>
		        </div>
                 `
            }
            this.PROPERTIES.currentPage += 1;
            this.PROPERTIES.etatScroll = false;

        }
    },

    displayPosts : function(){
        pageHeight = document.documentElement.offsetHeight;
        windowHeight = window.innerHeight;
        scrollPosition = window.scrollY ||  window.pageYOffset || document.body.scrollTop + (document.documentElement && document.documentElement.scrollTop || 0 );

        if (pageHeight <= windowHeight+scrollPosition){
            if (this.PROPERTIES.currentPage <= this.PROPERTIES.totalPage){
                if (this.PROPERTIES.etatScroll === false ){
                    this.PROPERTIES.etatScroll = true;
                    this.infiniteScrollActu();
                }
            }
        }
    },
    displayVinyles : function(){
        pageHeight = document.documentElement.offsetHeight;
        windowHeight = window.innerHeight;
        scrollPosition = window.scrollY ||  window.pageYOffset || document.body.scrollTop + (document.documentElement && document.documentElement.scrollTop || 0 );

        if (pageHeight <= windowHeight+scrollPosition){
            if (this.PROPERTIES.currentPage <= this.PROPERTIES.totalPage){
                if (this.PROPERTIES.etatScroll === false ){
                    this.PROPERTIES.etatScroll = true;
                    this.infiniteScrollVinyles();
                }
            }
        }
    }
}

window.onload = appli.init();


// ####################################################
// ####################################################

