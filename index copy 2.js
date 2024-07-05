{
  _id: ObjectId('663f821751ac11f17e12143c'),
  profilePic: 'default.png',
  isVerified: true,
  isPhoneVerified: true,
  active: true,
  firstName: 'Phil',
  lastName: 'Smith',
  email: 'phil.smtih@gmail.com',
  password: '$2a$10$FSccajtj1hVTZYTOqXYT6uO9nHAoOSSn4bEY.WY7je5ip8pzQych2',
  contactNo: {
    number: '(902) 809-1453',
    internationalNumber: '+1 902-809-1453',
    nationalNumber: '(902) 809-1453',
    e164Number: '+19028091453',
    countryCode: 'CA',
    dialCode: '+1'
  },
  role: 'USER',
  buyerType: 'direct',
  messaging_options: [
    {
      _id: ObjectId('663f835c51ac11f17e121443'),
      type: 'SMS',
      updatedAt: ISODate('2024-05-11T14:40:28.751Z'),
      createdAt: ISODate('2024-05-11T14:40:28.751Z')
    },
    {
      _id: ObjectId('663f835c51ac11f17e121444'),
      type: 'Email',
      updatedAt: ISODate('2024-05-11T14:40:28.751Z'),
      createdAt: ISODate('2024-05-11T14:40:28.751Z')
    }
  ],
  products: [
    {
      _id: ObjectId('663f82fe51ac11f17e12143f'),
      productId: ObjectId('618e9235411ad38ac41b4e7b'),
      updatedAt: ISODate('2024-05-11T14:38:54.175Z'),
      createdAt: ISODate('2024-05-11T14:38:54.175Z')
    },
    {
      _id: ObjectId('663f82fe51ac11f17e121440'),
      productId: ObjectId('65f61adf51ac11f17e12120a'),
      updatedAt: ISODate('2024-05-11T14:38:54.175Z'),
      createdAt: ISODate('2024-05-11T14:38:54.175Z')
    },
    {
      _id: ObjectId('663f82fe51ac11f17e121441'),
      productId: ObjectId('6489f1aa4cf63dda1b00b518'),
      updatedAt: ISODate('2024-05-11T14:38:54.175Z'),
      createdAt: ISODate('2024-05-11T14:38:54.175Z')
    }
  ],
  createdAt: ISODate('2024-05-11T14:35:03.294Z'),
  updatedAt: ISODate('2024-06-10T10:19:18.736Z'),
  __v: 0,
  transactionId: ObjectId('6666d32651ac11f17e121549'),
  userType: 'PREMIUM',
  verification_token: {
    token: 'FOhsWPk033fEeD2SumJpK8QAl',
    expired: true,
    createdAt: ISODate('2024-05-11T14:39:22.378Z')
  },
  phone_verification: {
    otp: '535776',
    expired: true,
    createdAt: ISODate('2024-05-11T14:40:13.185Z')
  }
}


const transactionSessionSchema = new Schema({
  userId: { type: Schema.Types.ObjectId, required: true, ref: 'User' },
  subscriptionId: { type: Schema.Types.ObjectId, required: true, ref: 'Subscrip>
  planId: { type: String, required: true },
  planName: { type: String, required: true },
  duration: { type: String, required: true },
  isExpired: { type: Boolean, default: false },
  transactionType: { type: String, enum: ['signup', 'normal'], required: true }
}, { timestamps: true });


