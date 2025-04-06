<li class="TPostMv post-66 movies type-movies status-publish hentry category-comedy category-drama category-romance country-united-states-of-america annee-360 directors-diane-durant directors-greg-berlanti directors-katye-kalivoda directors-kevin-breen directors-meaghan-f-mclaughlin directors-richard-graves directors-ryan-j-pezdirc cast-abigail-houck cast-alex-sgambati cast-alexandra-shipp cast-baz-ma cast-briana-estevez cast-bryson-pitts cast-campbell-godfrey cast-carsen-rowe cast-cassady-mcclincy cast-chantell-d-christopher cast-christian-ojore-mayfield cast-christopher-l-plunkett cast-clark-moore cast-collin-mchugh cast-danni-heverin cast-david-copeland-brown-jr cast-drew-starkey cast-dylan-cheek cast-emily-jordan cast-haroon-khan cast-jaidi-ventura cast-james-sterling cast-jamila-thompson cast-jennifer-garner cast-jessi-peralta cast-jodi-houck cast-joey-pollari cast-jonah-blaine-bowling cast-jonathan-fritschi cast-jorge-lendeborg-jr cast-josh-duhamel cast-josh-royston cast-joshua-mikel cast-katherine-langford cast-keiynan-lonsdale cast-logan-miller cast-mackenzie-lintz cast-mandy-fason cast-matthew-laraway cast-miles-heizer cast-nancy-de-mayo cast-natalia-tureta cast-natasha-rothwell cast-nicholas-stargel cast-nick-robinson cast-nye-reynolds cast-patrick-donohue cast-philip-covin cast-robbie-rogers cast-samantha-bulka cast-sean-odonnell cast-skye-mowbray cast-talitha-bateman cast-terayle-hill cast-tony-hale cast-tyler-chase cast-tyson-love">
    <article class="TPost B">
        <a href="{{$movie->getUrl()}}">
            <div class="Image">
                <figure class="Objf TpMvPlay AAIco-play_arrow">
                    <img loading="lazy" src="{{$movie->getThumbUrl()}}"
                         alt="{{$movie->name}}">
                </figure>
                <span class="MvIC"><span class="Qlty Yr">{{$movie->publish_year}}</span></span>
            </div>
            <h2 class="Title">{{$movie->name}}</h2>
        </a>
    </article>
</li>
