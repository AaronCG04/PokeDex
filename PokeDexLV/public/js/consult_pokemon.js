const URL = `https://pokeapi.co/api/v2/pokemon/`;
const im = document.getElementById('pok_foto');
const nombre = document.getElementById('nombre');
const exp = document.getElementById('exp');
const hp = document.getElementById('hp');
const atk = document.getElementById('atk');
const def = document.getElementById('def');
const car = document.getElementById('ca_p');
const tipos = document.getElementById('tipos');
const h_t = document.getElementById('habilidades');
const click = document.getElementById('boton');

let nombre_p,exp_p,hp_p,atk_p,def_p;

function optener_pokemon(id){
    fetch(URL+id).then(res=> res.json())
                 .then(res=>{
                    console.log(res);
                    mostrar_datos(res);
                    save_pokemon();
                })
                 .catch(err=>console.log("Error en la solicitud ..."));
}
function mostrar_datos(pokemon){
    var name_p = pokemon.name.charAt(0).toUpperCase() + pokemon.name.slice(1);
    var tipos_t="",habilidades="";
    im.src = pokemon.sprites.other.home.front_default;
    nombre.textContent = name_p;
    
    exp.innerHTML = `<p>${pokemon.base_experience}</p>`;
    hp.innerHTML = `<p>${pokemon.stats[0].base_stat}</p>`;
    atk.innerHTML = `<p>${pokemon.stats[1].base_stat}</p>`;
    def.innerHTML = `<p>${pokemon.stats[2].base_stat}</p>`;
    car.innerHTML = `<div class="col-3 text-black-50">
                        <h2>#${pokemon.id}</h2>
                     </div>
                     <div class="col-9 rounded-pill bg-dark text-white">
                        <h2 >${name_p}</h2>
                     </div>`;
    for (let i = 0; i < pokemon.types.length; i++) {
        tipos_t +=`<div class="col-3 rounded-pill" style="background-color: #${random_color()};margin-left: 2em;
        margin-right: 2em; margin-top: 1em;">
                    <h5>${pokemon.types[i].type.name.toUpperCase()}</h5>
                   </div>`;
    }
    for (let i = 0; i < pokemon.abilities.length; i++) {
        habilidades += `<li class="list-group-item list-group-item-success">${pokemon.abilities[i].ability.name.charAt(0).toUpperCase() + pokemon.abilities[i].ability.name.slice(1)}</li>`;
    }
    tipos.innerHTML = tipos_t;
    h_t.innerHTML = habilidades;
    // -----
    nombre_p=name_p;
    exp_p=pokemon.base_experience;
    hp_p=pokemon.stats[0].base_stat;
    atk_p=pokemon.stats[1].base_stat;
    def_p=pokemon.stats[2].base_stat;
    // -----
}

//-----------
optener_pokemon(Math.floor(Math.random() * (800 - 1 + 1) + 1));
click.addEventListener('click',click_boton);
setInterval(()=>{
    optener_pokemon(Math.floor(Math.random() * (800 - 1 + 1) + 1));
},30000);

function random_color(){
    const randomColor = Math.floor(Math.random()*16777215).toString(16);
    return randomColor;
}

function click_boton (){
    optener_pokemon(Math.floor(Math.random() * (800 - 1 + 1) + 1));
}
function save_pokemon(){
    const data = new FormData();
    data.append('nombre', nombre_p.toString());
    data.append('exp',exp_p.toString());
    data.append('hp', hp_p.toString());
    data.append('atk', atk_p.toString());
    data.append('def',def_p.toString());
    data.append("_token", $("meta[name='csrf-token']").attr("content"));
    fetch('http://127.0.0.1:8000', {
    method: 'POST',
    body: data
    })
    .then(function(response) {
    if(response.ok) {
        return response.text()
    } else {
        throw "Error en la llamada Ajax";
    }

    })
    .then(function(texto) {
    console.log(texto);
    })
    .catch(function(err) {
    console.log(err);
    });
}

