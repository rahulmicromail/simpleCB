
$synth = window.speechSynthesis;

function textToSpeech()
{
  $voice = new SpeechSynthesisUtterance();
  $voice.text = $read;
  $voice.lang = "en-IN";
  $voice.volume = 1;
  $voice.rate = 1;
  $voice.pitch = 1; // Can be 0, 1, or 2
  synth.speak($voice);
}
