{
  _id: ObjectId('6472b14314e23bba19bc9154'),


  createdAt: ISODate('2023-05-28T01:41:23.502Z'),
  updatedAt: ISODate('2024-07-01T13:51:23.083Z'),
  __v: 0,
  verification_token: {
    token: 'yyBaV5zufRY33cCgCRTSHFcYJ',
    expired: true,
    createdAt: ISODate('2023-05-28T01:41:23.511Z')
  },
  trial: {
    active: false,
    duration: 30,
    end: ISODate('2023-06-27T01:41:39.714Z'),
    start: ISODate('2023-05-28T01:41:39.714Z')
  },
  userType: 'TRIAL_EXPIRED',
 
}

db.users.updateOne(
  { _id: ObjectId('6472b14314e23bba19bc9154') },
  {
    $set: {
      transactionId: ObjectId('66700cbb51ac11f17e121583'),
      userType: 'PREMIUM'
    }
  }
)