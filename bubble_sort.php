<?php

function bubbleSort($data)
{

    return $data;
}

$data = 'Quadrisect critical spallanzani otolaryngologist algin buttonwood halfback nonrhythmic piassaba suffragettism algorism kenmore jamboree unextruded Hunker dystrophic cuvette sterigma vdc negational epoxies lollardry panelling khanate geometer otherness tridymite pressureless Precedent semicolloidal calvinistically tekakwitha erymanthus overintensifying heresiarch snowbound ugric whitening chickasha actinotherapy dolour logroller Microphyte implicating carnosine hesitator undelineative hyposthenic mythomania korzybski coinsurer pep rhexes cardboard endosporously burthensome Idiodynamics faraway syzygy seicento mile chairman fromage underconcerned leibniz postaxillary gliding chafe epistemology whipsawing Redefied dago interclavicular agarita berserk monopode forgeries globeflower preguided inimical transsegmental hyperenthusiastically unlogged hypermeter Transmigrant entomic unluxuriant anï¾¡polis unrhapsodical alga inadvisably odontograph vizir bureaucratise cranford servomotor reactivating acanthous Extent hastier continually furfuran ghelderode syntonised hypnotisable turnverein levitative bibl silverfishes mishna tribology splendidly Chemnitz francophilia glove deuteron piend volt violinless hypertrophied aladdin subarticulate elys accordantly tolbooth leaper Inactivating noninterchangeable paroling systematology hasmonean farandole iasters massoretic liveable presolicit zyrian cloudland peripateticism belie Federal nonhomiletic boldo splenomegaly mimas outrivaled privates phaeacia polyphemus throughput habitably sloth chlorothiazide hilt Sunburning unjubilant pachuca rhg ver injurer anticonformity relanced verbalizer cytotactic untrundled militarised varuna unriveted Unbrutalise christianize overaffirmative stang booklet gauffer pleiotaxis untorridity repique ladder fiery livenza mine pseudomilitaristic Mujtahid pozsony shirk abidjan visard vicarate yipping pyknic tadjik houselled reinvoking pterelaus frontlessly prefavorite Cymar rics endopodite eridu bever trickily customableness beaverish chestnutty zygophyte chittagong jansenist homeotypic publisher';
$data = strtolower($data);
$unsorted = explode(" ", $data);
echo PHP_EOL.'UNSORTED'.PHP_EOL;
array_walk($unsorted, function($item, $key){
    echo $item ." ";
});

$sorted = bubbleSort($unsorted);