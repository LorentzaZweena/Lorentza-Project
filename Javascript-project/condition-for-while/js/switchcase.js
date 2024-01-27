var genreGame = prompt("Masukkan Genre / jenis buku: \n (example : Romance, Fiction, Non-fiction, Education, Adventure, Horror");
switch(genreGame){
    case "Fiction":
    case "Education":
    case "Adventure":
    case "Romance":
    case "Horror":
    console.log('Yang anda masukkan adalah genre buku');
    break;
    case "Novel":
    case "Majalah":
    case "Komik":
    case "Manga":
    case "Ensiklopedia":
    case "Biografi":
    alert("Yang anda masukkan adalah jenis buku");
    break;
    default:
    alert("Data salah");
    break;


}