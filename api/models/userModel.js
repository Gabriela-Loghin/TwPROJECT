const mysql = require("mysql2");
const { v4: uuidv4 } = require('uuid');

const con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "root",
  database: "workout_generator",
});

con.connect((err) => {
  if (err) throw err;
  console.log("Connected!");
});

function getByEmail(email) {
  return new Promise((resolve, reject) => {
    let query = `SELECT * FROM users where email = "${email}"`;
    con.query(query, function (err, result, fields) {
      if (err) throw err;
      if (result.length !== 0) {
          resolve(result[0]);
        }
      resolve();
    });
  });
}

function login(user) {
  return new Promise((resolve, reject) => {
    let query = `SELECT * FROM users where email = "${user.email}" and password = "${user.pass}"`
    con.query(query, function (err, result, fields) {
      if (err) throw err;
      if (result.length !== 0) {
        let token = uuidv4();
        let id = result[0].id;
        let tokenQuery = `INSERT INTO access_tokens (userEmail, token) values(${id},
        "${token}")`;

        con.query(tokenQuery, function (err, result, fields){
          if (err) throw err;
        })
        resolve(token);
      } else
      resolve();
    });
  });
}

function register(user) {
  return new Promise((resolve, reject) => {
    user.imagePath=user.imagePath.replace(/\\/g, '\\\\')
      let query = `INSERT INTO users (first_name, last_name, password, email, body_type, age, gender, imagePath ) VALUES ("${
        user.firstName}", "${user.lastName}", "${user.pass}","${user.email}", ${user.bodyType}, ${user.age},${user.gender}, "${user.imagePath}" )`;
      con.query(query, function (err, result, fields) {
        if (err){
            throw err;
        
        }
        resolve(user);
      });
  });
}

function getTop(){
    return new Promise((resolve, reject) => {
    con.query("SELECT first_name, antrenamente, imagePath FROM users where antrenamente!=0 order by antrenamente desc limit 10", function (err, result, fields) {
      if (err) throw err;
      resolve(result);
    });
  });

}

function updateUser(id, user){
    return new Promise(async (resolve, reject) => {
    
    let query = `UPDATE users set first_name = '${user.firstName}',
                                     last_name = '${user.lastName}',
                                     password = '${user.password}',
                                     body_type = ${user.bodyType},
                                     age = ${user.age},
                                     gender = ${user.gender},
                                     antrenamente = ${user.antrenamente}
                                     where id =${id}`;
    
    con.query(query, function (err, result, fields) {
      if (err) throw err;
      user = getByEmail(user.email);
      resolve(user);
    });
                                     
  });
}

function validateToken(userEmail, token){
  return new Promise(async (resolve, reject) => {
    
    let query = `select * from access_tokens t join users u on t.userEmail=u.ID where u.email="${userEmail}" and t.token = "${token}"`;
    
    con.query(query, function (err, result, fields) {
      if (err) throw err;
      if (result.length!==0)
        resolve("ok"); else
        resolve();
    });
                                     
  });
}

function getUserExercises(userID){
   return new Promise(async (resolve, reject) => {
    
    let query = `select e.name, ue.count, u.imagePath from exercises e join user_exercises ue on e.id=ue.idExercise join users u on u.id=ue.idUser where ue.idUser=${userID}`;
    
    con.query(query, function (err, result, fields) {
      if (err) throw err;
      resolve(result)
    });
                                     
  });
}


module.exports = {
  login,
  register,
  getTop,
  getByEmail,
  updateUser,
  validateToken,
  getUserExercises
};