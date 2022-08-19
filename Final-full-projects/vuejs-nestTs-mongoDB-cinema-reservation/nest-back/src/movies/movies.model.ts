import * as mongoose from 'mongoose';

export const MoviesSchema = new mongoose.Schema({
  title: { type: String },
  description: { type: String },
  picture: { type: String },
  price: { type: Number },
  rating: { type: Number },
  seat: { type: Number },
  category: { type: String },
});
export interface Movies {
  _id: string;
  title: String;
  description: String;
  picture: String;
  price: number;
  rating: number;
  seat: number;
  category: string;
}
