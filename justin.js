console.log("Welcome to Tunes");
// initialise the variables
let songIndex=0;
let audioElement=new Audio('songs1/1.mp3');
let masterplay=document.getElementById('masterplay');

let myProgressBar=document.getElementById('myProgressBar');
let gif=document.getElementById('gif');
let masterSongName=document.getElementById('masterSongName');
let songItems=Array.from(document.getElementsByClassName('song-item'));

let songs=[
    {songName:"Baby",filePath:"songs1/1.mp3",coverPath:"images/pasoori.jfif"},
    {songName:"Ghost",filePath:"songs1/2.mp3",coverPath:"images/excuses.jfif"},
    {songName:"Stay",filePath:"songs1/3.mp3",coverPath:"images/heat.jfif"},
    // {songName:"Stay",filePath:"songs/4.mp3",coverPath:"images/stay.jfif"},
    // {songName:"Bijlee Bijlee",filePath:"songs/5.mp3",coverPath:"images/bijlee.jfif"},
    // {songName:"Agar Tum Saath Ho",filePath:"songs/6.mp3",coverPath:"images/agar.jfif"},
    // {songName:"Tu Aake Dekhle",filePath:"songs/7.mp3",coverPath:"images/tu_aake.jfif"},
    // {songName:"Bhool Bhulaiyaa 2-Title Track",filePath:"songs/8.mp3",coverPath:"images/bb2.jpg"},
    // {songName:"Desires",filePath:"songs/9.mp3",coverPath:"images/desires.jfif"},
    // {songName:"Let Me Love You",filePath:"songs/10.mp3",coverPath:"images/song4.jpg"}

 ]
//  write code for serial no also??????????

 songItems.forEach((element,i)=>{
     
     element.getElementsByTagName("img")[0].src=songs[i].coverPath;
element.getElementsByClassName("song-name")[0].innerText=songs[i].songName;
 })
//  audioElement.play();
//  handel play/pause button
 masterplay.addEventListener('click',()=>{
     if(audioElement.paused || audioElement.currentTime<=0){
        audioElement.play();
        masterplay.classList.remove('fa-circle-play');
        masterplay.classList.add('fa-circle-pause');
        gif.style.opacity=1;
        //at starting when play then div play/pause handle
        let songId=document.getElementById(songIndex);
        songId.classList.remove('fa-circle-play');
        songId.classList.add('fa-circle-pause');
        

     }
     else{
        audioElement.pause();
        masterplay.classList.remove('fa-circle-pause');
        masterplay.classList.add('fa-circle-play');
        gif.style.opacity=0;
     }
 })
// listen to events
audioElement.addEventListener('timeupdate',()=>{
        //update seek bar
    progress=parseInt((audioElement.currentTime/audioElement.duration)*100);
        myProgressBar.value=progress;
})
myProgressBar.addEventListener('change',()=>{
    audioElement.currentTime=myProgressBar.value*audioElement.duration/100;
})

    
const makeAllPlays=()=>{
    Array.from(document.getElementsByClassName('songItemPlay')).forEach((element)=>{
        element.classList.remove('fa-circle-pause');
        element.classList.add('fa-circle-play');
    })
}
Array.from(document.getElementsByClassName('songItemPlay')).forEach((element)=>{
    element.addEventListener('click',(e)=>{
        console.log(e.target);
        makeAllPlays();
        songIndex=parseInt(e.target.id);
        e.target.classList.remove('fa-circle-play');
        e.target.classList.add('fa-circle-pause');
        audioElement.src=`songs/${songIndex+1}.mp3`;
        masterSongName.innerText=songs[songIndex].songName;
        audioElement.currentTime=0;
        audioElement.play();
        masterplay.classList.remove('fa-circle-play');
        masterplay.classList.add('fa-circle-pause');
        gif.style.opacity=1;
        //code for pause/play on song div

        // if(audioElement.paused || audioElement.currentTime<=0){
        //     audioElement.play();
        //     masterplay.classList.remove('fa-circle-play');
        //     masterplay.classList.add('fa-circle-pause');
        //     e.target.classList.remove('fa-circle-play');
        //     e.target.classList.add('fa-circle-pause');           
        //     gif.style.opacity=1;
    
        //  }
        //  else{
        //     audioElement.pause();
        //     masterplay.classList.remove('fa-circle-pause');
        //     masterplay.classList.add('fa-circle-play');
        //     gif.style.opacity=0;
        //  }
     


    })
})

// code for autoplay
audioElement.addEventListener('ended',myended);
function myended(){
    if(songIndex>=9){
        songIndex=0;
    }
    else{
        songIndex+=1;
    }
    audioElement.src=`songs1/${songIndex+1}.mp3`;
    masterSongName.innerText=songs[songIndex].songName;
    makeAllPlays();
    let songId=document.getElementById(songIndex);
       songId.classList.remove('fa-circle-play');
       songId.classList.add('fa-circle-pause');
        
        audioElement.currentTime=0;
        audioElement.play();
        masterplay.classList.remove('fa-circle-play');
        masterplay.classList.add('fa-circle-pause');

}


document.getElementById('next').addEventListener('click',()=>{
    if(songIndex>=9){
        songIndex=0;
    }
    else{
        songIndex+=1;
    }
    audioElement.src=`songs1/${songIndex+1}.mp3`;
    masterSongName.innerText=songs[songIndex].songName;
    makeAllPlays();
    // to update div pause/play
    let songId=document.getElementById(songIndex);
       songId.classList.remove('fa-circle-play');
       songId.classList.add('fa-circle-pause');
        audioElement.currentTime=0;
        audioElement.play();
        masterplay.classList.remove('fa-circle-play');
        masterplay.classList.add('fa-circle-pause');
        gif.style.opacity=1;
})
document.getElementById('previous').addEventListener('click',()=>{
    if(songIndex<=0){
        songIndex=0;
    }
    else{
        songIndex-=1;
    }
    audioElement.src=`songs/${songIndex+1}.mp3`;
    masterSongName.innerText=songs[songIndex].songName;
    makeAllPlays();
    // to update div pause/play
    let songId=document.getElementById(songIndex);
       songId.classList.remove('fa-circle-play');
       songId.classList.add('fa-circle-pause');
        audioElement.currentTime=0;
        audioElement.play();
        masterplay.classList.remove('fa-circle-play');
        masterplay.classList.add('fa-circle-pause');
        gif.style.opacity=1;
})


    

