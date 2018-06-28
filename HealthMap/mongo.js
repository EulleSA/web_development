var MongoClient = require('mongodb').MongoClient;
                            var url = 'mongodb://localhost:27017/';

                            MongoClient.connect(url, function(err, db) {
                            if (err) throw err;
                            var dbo = db.db('healthmap');
                            var myobj = { dataInicial: '2018-06-27', dataFinal : '2018-06-28', idUnidadeHospitalar: 1, matriculaUnidadeHospitalar: 201801, nsus: 2147483647, idDoenca: 2 };
                            dbo.collection('healthmap').insertOne(myobj, function(err, res) {
                                if (err) throw err;
                                console.log('1 document inserted');
                                db.close();
                            });
                            });