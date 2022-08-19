import * as mongoose from 'mongoose';

export const UserSchema = new mongoose.Schema({
  name: { type: String },
  email: { type: String },
  password: { type: String },
  token: { type: String },
  favourite: [{ type: String }],
});

export interface Users {
  id: String;
  name: String;
  email: String;
  password: String;
  token: String;
  favourite: [string];
}
