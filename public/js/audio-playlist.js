//<![CDATA[
$(document).ready(function () {
  "use strict";
  new jPlayerPlaylist(
    {
      jPlayer: "#musica-jquery-jplayer",
      cssSelectorAncestor: "#musica-audio-player-container",
    },
    [
      {
        title: "Iron maiden ",
        artist: "<span class='music-time'>04:27</span>",
        mp3: "http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3",
        oga: "http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg",
        poster: "images/home/poster1.jpg",
      },
      {
        title: "Your Face",
        artist: "<span class='music-time'>02:56</span>",
        mp3: "http://www.jplayer.org/audio/mp3/TSP-05-Your_face.mp3",
        oga: "http://www.jplayer.org/audio/ogg/TSP-05-Your_face.ogg",
        poster:
          "http://www.jplayer.org/audio/poster/The_Stark_Palace_640x360.png",
      },
      {
        title: "Hidden",
        artist: "<span class='music-time'>04:05</span>",
        mp3: "http://www.jplayer.org/audio/mp3/Miaow-02-Hidden.mp3",
        oga: "http://www.jplayer.org/audio/ogg/Miaow-02-Hidden.ogg",
        poster: "http://www.jplayer.org/audio/poster/Miaow_640x360.png",
      },
      {
        title: "Cyber Sonnet",
        artist: "<span class='music-time'>02:38</span>",
        mp3: "http://www.jplayer.org/audio/mp3/TSP-07-Cybersonnet.mp3",
        oga: "http://www.jplayer.org/audio/ogg/TSP-07-Cybersonnet.ogg",
        poster:
          "http://www.jplayer.org/audio/poster/The_Stark_Palace_640x360.png",
      },
      {
        title: "Tempered Song",
        artist: "<span class='music-time'>05:41</span>",
        mp3: "http://www.jplayer.org/audio/mp3/Miaow-01-Tempered-song.mp3",
        oga: "http://www.jplayer.org/audio/ogg/Miaow-01-Tempered-song.ogg",
        poster: "http://www.jplayer.org/audio/poster/Miaow_640x360.png",
      },
      {
        title: "Lentement",
        artist: "<span class='music-time'>05:44</span>",
        mp3: "http://www.jplayer.org/audio/mp3/Miaow-03-Lentement.mp3",
        oga: "http://www.jplayer.org/audio/ogg/Miaow-03-Lentement.ogg",
        poster: "http://www.jplayer.org/audio/poster/Miaow_640x360.png",
      },
    ],
    {
      playlistOptions: {
        autoPlay: false,
        loopOnPrevious: true,
        shuffleOnLoop: true,
        enableRemoveControls: true,
        displayTime: "show",
        freeItemClass: "jp-playlist-item-free",
      },
      swfPath: "js/jquery.jplayer.swf",
      supplied: "oga, mp3",
      wmode: "window",
      useStateClassSkin: true,
      autoBlur: true,
      smoothPlayBar: true,
      keyEnabled: true,
      remainingDuration: true,
      volume: 1,
    }
  );
});
//]]>
