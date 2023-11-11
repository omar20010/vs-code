let books = [[],[],[],[],[]];
function addBook(BookID,BookTitle,Author,Price,Quantity){
    books[0].push(BookID);
    books[1].push(BookTitle);
    books[2].push(Author);
    books[3].push(Price);
    books[4].push(Quantity);
}
function printBook(book){
    let result = `Book ID: ${book[0]}
    Book Title: ${book[1]}
    Author: ${book[2]}
    Price: ${book[3]}
    Quantity: ${book[4]}`
    console.log(result);
    return result;
    }
function deleteBook(BookID){
    for(let i=0;i<books.length;i++){
        if(BookID==books[0][i]){
            for (let j=0;j<books.length;j++){
                books[j]=deleteElement(books[j],i);
            }
            console.log("Deleted Successfully")
            return;
        }
    }
    
}
function EditBook(BookID,BookTitle,Author,Price,Quantity){
    for(let i=0;i<books.length;i++){
        if(BookID==books[0][i]){
            books[1][i]=BookTitle;
            books[2][i]=Author;
            books[3][i]=Price;
            books[4][i]=Quantity;
            console.log("Edited Successfully")
            return;
        }
    }
    console.log("Not Edited")
}

function EnquiryByID(BookID){
    for(let i=0;i<books.length;i++){
        if(books[0][i]==BookID){
            let result=[]
            result.push(books[0][i],books[1][i],books[2][i],books[3][i],books[4][i])
            printBook(result);
            return result;
        }
    }
    return "the book ID is not exist"
    
}
function EnquiryByTitle(BookTitle){
    for(let i=0;i<books.length;i++){
        if(books[1][i]==BookTitle){
            let result=[]
            result.push(books[0][i],books[1][i],books[2][i],books[3][i],books[4][i])
            printBook(result);
            return result;
        }
    }
    return "the Book Title is not exist"
}
function EnquiryByAuthor(Author){
    for(let i=0;i<books.length;i++){
        if(books[2][i]==Author){
            let result=[]
            result.push(books[0][i],books[1][i],books[2][i],books[3][i],books[4][i])
            printBook(result);
            return result;
        } 
    }
    return "the Author is not exist"
}

function sellBook(BookTitle,Quantity,Balance){
    for(let i=0;i<books.length;i++){
        if(BookTitle==books[1][i]){
            
            if(Quantity<=books[4][i]&&Balance>=((books[3][i])*Quantity)){
                books[4][i]-=Quantity;
            }else if(Balance<((books[3][i])*Quantity)){
                console.log("Your balance is not enough to purchase the book")
                return;
            } 
            else{
                console.log("We don't have enough quantity of this book to be sold.")
                return;
            }
                console.log(`You successfully sold the book with Book Title: ${BookTitle} your new Balance: ${Balance-=((books[3][i])*Quantity)}`)
                return;
        }else{
            return "The Book ID does not exist."
        }
    }
}

function deleteElement(array=[], index) {
    if (index >= 0 && index < array.length) {
       return [...array.slice(0, index), ...array.slice(index + 1)]
     }
     return array;
    }



addBook(1,"Start with why","Simon Sinek", 80.0, 13);
addBook(2,"But how do it know","J. Clark Scott", 59.9, 22);
addBook(3,"Clean Code","Robert Cecil Martin", 50.0, 5);
addBook(4,"Zero to One","Peter Thiel", 45.0, 12);
addBook(5,"You don't know JS","Kyle Simpson", 39.9, 9);

EnquiryByID(2);
console.log("")
deleteBook(2)
for(let i=0;i<books[0].length;i++){
    let book = [books[0][i],books[1][i],books[2][i],books[3][i],books[4][i]];
    printBook(book);
}
console.log('----------------------------------');
sellBook("Start with why",2,190);
EnquiryByTitle("Start with why");