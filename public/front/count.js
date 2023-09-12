function ItemCount(){
    let itemString = localStorage.getItem('DaisyClothing');
    if(itemString){
        let itemArray = JSON.parse(itemString);
        if(itemArray != 0){
            let count = itemArray.length;
            $('.itemCount').text(count);
        }else{
            $('.itemCount').text('0');
        }
    }
}