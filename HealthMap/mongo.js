var MongoClient = require('mongodb').MongoClient;
                            var url = 'mongodb://localhost:27017/';

                            MongoClient.connect(url, function(err, db) {
                            if (err) throw err;
                            var dbo = db.db('healthmap');
                            var myobj = { dataInicial: '2018-06-28', dataFinal : '', idUnidadeHospitalar: 2, matriculaUnidadeHospitalar: 201802, nsus: 238352799230005, idDoenca: 2 };
                            dbo.collection('healthmap').insertOne(myobj, function(err, res) {
                                if (err) throw err;
                                console.log('1 document inserted');
                                db.close();
                            });
                            });